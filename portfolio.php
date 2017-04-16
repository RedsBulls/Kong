<?php
    include("config.php");
    mysql_set_charset('utf8');
?>

<html>
    <head>
        <meta charset="utf-8">
        <link href="css/MainCss.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
         <?php
         require("menu.php")
        ?>
        <div class="body">
            <div class="header">LIghtCms</div>



            <div class="block">
                <?php
                    $tb = mysql_query("SELECT * FROM news where type=1");
                    while($res = mysql_fetch_array($tb))
                    {
                        echo '<div class="news">
                                <div class="Name">'.$res['Name_New'].'</div>
                                <div class="Summar">'.$res['Summar_New'].'</div>
                                <div class="Date">Дата публикации: '.$res['Date'].'</div>
                                <a href="full.php?id='.$res['id_news'].'" class="a">Подробнее...</a>
                              </div>';
                    }
                ?>
            </div>
       </div>
    </body>
</html>