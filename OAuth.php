<?php 
 session_start();

$client_id = '260199514825-dcsvr5ocejqtqeit3t1rnivujuen2vsv.apps.googleusercontent.com'; // Client ID
$client_secret = 'VpwgDatbgkzRbq7sf1DV2ODZ'; // Client secret
$redirect_uri = 'http://localhost/www/Kong/admin.php'; // Redirect URIs

$url = 'https://accounts.google.com/o/oauth2/auth';

$params = array(
    'redirect_uri'  => $redirect_uri,
    'response_type' => 'code',
    'client_id'     => $client_id,
    'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile'
);




if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'client_id'     => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri'  => $redirect_uri,
        'grant_type'    => 'authorization_code',
        'code'          => $_GET['code']
    );

    $url = 'https://accounts.google.com/o/oauth2/token';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl);
    curl_close($curl);
    $tokenInfo = json_decode($result, true);

    if (isset($tokenInfo['access_token'])) 
    {
        $params['access_token'] = $tokenInfo['access_token'];

        $userInfo = json_decode(file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['id'])) {
            $userInfo = $userInfo;
            $result = true;
        }
        $name= $userInfo['name']; 
        $email= $userInfo['email'];
        $picture=$userInfo['picture']; 
        $query = mysql_query("SELECT `email`,`name`,`picture` FROM user where `emaiL`='$email'"); 
        if(mysql_num_rows($query)!=0)
        {
            while($res = mysql_fetch_array($query))
            {
//                $email= $res['email'];
//                $name= $res['name'];
//                $picture= $res['picture'];
//               
                
                //$_SESSION['name']=$res['name'];
                //$_SESSION['picture']=$res['picture'];
                setcookie("email", $res['email']);
                setcookie("name", $res['name']);
                setcookie("picture", $res['picture']);
                 echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";

                //$_SESSION['email']=$res['email'];
            }   
        }
        else
        {   
           
            $query = mysql_query("INSERT INTO `user` SET `email`='$email',`name`='$name',`picture`='$picture', `img_id`=2");
            if($query==true)
            {
//                    $name= $userInfo['name'];
//                    $email=  $userInfo['email']; 
//                    $picture=$userInfo['picture']; 
//                    $_SESSION['name']=$userInfo['name'];
//                    $_SESSION['picture']=$userInfo['picture'];
//                    $_SESSION['email']=$userInfo['email'];
//                    $name= setcookie("name", $userInfo['name']);
//                    $email=  setcookie("email", $userInfo['email']);
//                    $picture=setcookie("picture", $userInfo['picture']);
                
                setcookie("email", $userInfo['email']);
                setcookie("name", $userInfo['name']);
                setcookie("picture", $userInfo['picture']);
                
                $imya=$userInfo['email'];
    
                $completions = "/@mpt.ru|а$/i";

                // Строка, в которой заменяем
                $string = $imya;

                // Удаляем окончания
                $string = preg_replace($completions, "", $string);

                echo $string;
            $sourceDir = '/xampp/htdocs/www/kong/folder';
            $destDir   = '/xampp/htdocs/www/kong/'.$string.'';

            if (!file_exists($destDir)) {
                mkdir($destDir, 0755, true);
            }

            $dirIterator = new RecursiveDirectoryIterator($sourceDir, RecursiveDirectoryIterator::SKIP_DOTS);
            $iterator    = new RecursiveIteratorIterator($dirIterator, RecursiveIteratorIterator::SELF_FIRST);

            foreach ($iterator as $object) {
                $destPath = $destDir . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
                ($object->isDir()) ? mkdir($destPath) : copy($object, $destPath);
            }
                 echo "<html><head><meta http-equiv='Refresh' content='0; URL=".$string."/admin.php'></head></html>";

            }
            
            else
            {
                mysql_error();
                echo "NE DOBAVILOS";
            }

        }
    }

   


}


?>