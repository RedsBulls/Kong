<?php
    include("config.php");
    mysql_set_charset('utf8');
    
    $id = intval($_GET['id']);
    $query = mysql_query("SELECT * FROM news where id_news='$id'");
    $res = mysql_fetch_array($query);    
?>

<html>
<?php
include("head.php") ;
?>
    
    <body>
        <form action="Edit_new_action.php" method="post">
        <div class="work-experience text-center">
            <div class="container">
                <div class="work-info">
                    <h3>ИЗМЕНЕНИЕ НОВОСТИ</h3>
                </div>
                <div class="work-grids">
                    <div class="work-grid">
                        <h3><?php
                        echo date("d/m/Y");
                        ?>
                            <div class="cancel"style="float: right;"><a  href="admin.php" >ОТМЕНА</a></div>
                        </h3>
                        <div class="work-grid-info">
                            <h4>
                                <input type="hidden" value="<?php echo $id;?>" name="id">
                                <input type="textbox" name="title" required placeholder="Заголовок статьи" value="<?php echo $res['Name_New'];?>">
                            </h4><br>
                            <p> <textarea class="resize" placeholder="Короткое описание" required name="summar" cols="130" rows="4" maxlength="520" style="resize: none;" ><?php echo $res['Summar_New'];?></textarea></p>
                            <div class="strip-border"><p></p></div><br>
                            <p><textarea class="resize" placeholder="Полное описание" required name="full" style="resize: none;" cols="130" rows="7" maxlength="520"><?php echo $res['Full_New'];?></textarea></p>
                           <input type="submit" name="submit" value="Изменить статью">
                        </div>
                    </div>
                </div>
             <div class="clearfix"></div>   
            </div>
        </div>
        </form>            
    </body>
</html>