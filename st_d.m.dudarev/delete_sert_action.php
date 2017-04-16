<?php
    include("config.php");
    mysql_set_charset('utf8');

    $id = $_GET['id'];
    if(is_numeric($id))
    {
        $query = mysql_query("DELETE FROM sertificate WHERE id_sert ='$id'");
    }

    if($query==true)
    {
        echo "<html><head><meta http-equiv='Refresh' content='0; URL=admin.php'></head></html>";
    }
    
?>
