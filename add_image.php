<?php
include("config.php");
$email=$_COOKIE['email'];
    $banner =  $_POST['banner'];
    
//    $query = mysql_query("UPDATE images SET `banner`='$banner',`about`='$about',`myskills`='$myskills'");
//    if($query==true)
//    {
//        echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";
//    }
//    else{
//        mysql_error();
//    }

//    $banner =  $_POST['banner'];
//    $about =  $_POST['about'];
//    $myskills =  $_POST['myskills'];
    $query = mysql_query("SELECT * FROM images WHERE `banner`='$banner' ");
    $res=mysql_fetch_array($query);
    $img_id= $res['id_img'];
    $query = mysql_query("UPDATE user SET `img_id`='$img_id' WHERE `email`='$email'");
    if($query==true)
    {
        echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";
    }
    else{
        mysql_error();
    }
    
?>
   
