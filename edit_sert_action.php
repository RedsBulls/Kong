<?php
    include("config.php");
    mysql_set_charset('utf8');
    $email=$_COOKIE['email']; 
    function filter_data($var)
    {
        $var = mysql_real_escape_string($var);
        $var = htmlspecialchars($var);
        $var = trim($var);
        return $var;
    }
    $id = intval($_POST['id']);
    $title =  filter_data($_POST['title']);
    $info = filter_data($_POST['info']);
    $date = filter_data($_POST['date']);
    $status = filter_data($_POST['status']);
    $zavedenie = filter_data($_POST['zavedenie']);
    $q = mysql_query("SELECT * FROM user where `email`='$email'");
    $res = mysql_fetch_array($q);
    $user_id= $res['id_user'];
    $query = mysql_query("UPDATE sertificate SET `title`='$title',`info`='$info',`date`='$date',`status`='$status',`zavedenie`='$zavedenie', `user_id`='$user_id' WHERE id_sert ='$id'");

    if($query==true)
    {
        echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";
    }
    else{
        mysql_errno();
    }
?>
