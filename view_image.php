<?php
include("config.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
  // Графический файл из базы данных извлекается простым SQL запросом
  // Где $id номер изображения
  $result = mysql_query("SELECT * FROM images WHERE id='$id'",$db);
 	...
  // Используем функцию printf для вывода кода
  printf ("img class='work_image' src="http://site.softmaker.kz/files/font>'>", $myrow["id"]);
  // Передаём параметр $myrow["id"] в файл get_image.php
          
          ?>