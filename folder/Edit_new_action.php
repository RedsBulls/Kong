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

    $title =  filter_data($_POST['title']);
    $summar = filter_data($_POST['summar']);
    $full = $_POST['full'];
     $date = date("d/m/Y");
    $id = intval($_POST['id']);

    $query = mysql_query("UPDATE news SET `Name_New`='$title',`Summar_New`='$summar',`Full_New`='$full',`Date`='$date' WHERE id_news ='$id'");

    if($query==true)
    {
        echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";
    }
    else{
        mysql_error();
    }
?>
