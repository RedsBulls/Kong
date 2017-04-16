<!DOCTYPE html>
<?php
    include("config.php");
    mysql_set_charset('utf8');
  //  session_start();
  //  $_SESSION['type']=3;
?>
<html>
<?php
  include("head.php");  
 // $type=3;
?>
<body>
    
<!--work-->
<form action="add_new_action.php" method="post">
    <div class="work-experience text-center">
        <div class="container">
            <div class="work-info">
               <h3>ДОБАВЛЕНИЕ НОВОСТИ</h3>	  
            </div>
        <div class="work-grids">          
            <div class="work-grid">            
                <h3>
                    <?php
                    echo date("d/m/Y");
                    ?>
                    <div class="cancel"style="float: right; margin-right: 4%;"><a  href="admin.php" >ОТМЕНА</a></div>
                </h3>
                <div class="work-grid-info">
                    <h4><input type="textbox" name="title" required placeholder="Заголовок статьи"></h4><br>
                    <p><textarea class="resize" placeholder="Короткое описание" required name="summar" cols="130" rows="4" maxlength="520" ></textarea></p>
                    <div class="strip-border"><p></p></div><br>
                    <p><textarea  placeholder="Полное описание" required name="full" cols="130" rows="7"  ></textarea></p>
                   <input  type="submit" name="submit"  class="btn btn-info" value="Добавить статью" >
                </div>
            </div>
        </div>
        <div class="clearfix"></div>   
        </div>
    </div>
</form>
</body>
</html>