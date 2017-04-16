<!DOCTYPE html>
<?php
    include("config.php");
    mysql_set_charset('utf8');   
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
        <p><textarea class="resize" placeholder="Краткое описание" required name="about" cols="130" rows="4" maxlength="520" style="resize: none;"></textarea></p>
	</div>
    <input  type="submit" name="submit"  class="btn btn-info" value="Добавить иноформацию о себе" >
</div>

</form>
</body>
</html>