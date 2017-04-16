<!DOCTYPE html>
<?php
    include("config.php");
    mysql_set_charset('utf8');   
    $id = intval($_GET['id']);
    $query = mysql_query("SELECT * FROM user where id_user='$id' ");
    $res = mysql_fetch_array($query);    
?>
<html>
<?php
  include("head.php"); 

?>
<body>
    

<form action="edit_about_action.php" method="post">    
<div class="about text-center" id="about"> 
	<div class="container">
		<h3>О ПРЕПОДАВАТЕЛЕ</h3>
		<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <p><textarea class="resize" placeholder="Краткое описание" required name="about" cols="130" rows="4" maxlength="520" style="resize: none;" value=""><?php echo $res['about'];?></textarea></p>
	</div>
    <input  type="submit" name="submit" value="Изменить иноформацию о себе" >
</div>

</form>
</body>
</html>