<?php
    include("config.php");
    mysql_set_charset('utf8');
?>

<html>
    <?php
  include("head.php");      
?>
    
    <body>
         <?php
                $id = $_GET['id'];
                $f = mysql_query("SELECT `Name_New`,`Summar_New`,`Full_New`,`Date` FROM news WHERE id_news ='$id'",$db);
                $res = mysql_fetch_array($f); 
                echo '
        <div class="work-experience text-center">
	
	<div class="container">
		<div class="work-info">
			<h1>'.$res['Name_New'].'</h1>
		</div>
		<div class="strip text-center"><img src="images/work.png" alt=" "/></div>
		 
               <div class="work-grids">
   
            
                    
                    <div class="work-grid" >
                        
                        <h3><a style="float: left; margin-left: 4%;" href="index.php">Назад</a><div style="margin: 0 auto;">'.$res['Date'].'</div></h3>
                        <div class="work-grid-info">
                            
                            <p>'.$res['Summar_New'].'</p>
                            <div class="strip-border"><p></p></div><br>
                            <p>'.$res['Full_New'].'</p>
                        </div>
                    </div>
                
               </div>
        </div>
        </div>             
                           ';
            ?>
        
         
        
       
    </body>
</html>