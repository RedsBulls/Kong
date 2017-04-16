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

    $about =  filter_data($_POST['about']);
    //$summar = filter_data($_POST['summar']);
    //$full = $_POST['full'];

    $query = mysql_query("UPDATE user SET `about`='$about' where `email`='$email'");

    if($query==true)
    {
        echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";
    }
    else{
        mysql_error();
    }
?>
