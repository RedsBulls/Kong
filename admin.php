<!DOCTYPE html>
<?php
    include("config.php");
    mysql_set_charset('utf8');
include("OAuth.php");
@$picture=$_COOKIE['picture']; 
@$email=$_COOKIE['email']; 



    //echo $_SESSION['login'];
//    if(!$_SESSION['login'] AND !$_SESSION['pass']) 
//    {
//    if ($result) {
//
//    $name= $userInfo['name']; 
//    $email= $userInfo['email']; 
//    $query = mysql_query("SELECT email FROM user where `emaiL`='$email'");
//    if($query==true)
//    {
//        while($res = mysql_fetch_array($query))
//        {
//            $email= $res['email'];
//        }   
//    }
//    else{
//        $query = mysql_query("INSERT INTO user SET `email`='$email',`name`='$name'");
//        if($query==true)
//        {
//           $email= $res['email'];
//        }
//        else{
//            mysql_error();
//        }
//        
//    }
////    echo "Социальный ID пользователя: " . $userInfo['id'] . '<br />';
////
////    echo "Имя пользователя: " . $userInfo['name'] . '<br />';
////
////    echo "Email: " . $userInfo['email'] . '<br />';
////
////    echo "Ссылка на профиль пользователя: " . $userInfo['link'] . '<br />';
////
////    echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
////
////    echo '<img src="' . $userInfo['picture'] . '" />'; echo "<br />";
////
//}

?>




    <?php
   // }

  //  else{
        
        ?> 



<html>
<?php
//  include("head.php");      
?>
<body>
<!-- banner -->
<?php
$q = mysql_query("SELECT img_id FROM user WHERE `email`='$email'");
$res = mysql_fetch_array($q);
$img_id=$res['img_id'];
$q = mysql_query("SELECT * FROM images WHERE id_img='$img_id'");
$res = mysql_fetch_array($q);
echo ' <div class="banner" id="home" style="background-image: url(images/'.$res['banner'].') ;background-attachment: fixed, fixed;" >'
?>
	<div class="container"> 
		<div class="top-header row">
			<script src="js/classie.js"></script>
			<!--top-nav---->
			<div class="logo">
				<a href="index3.php"><img width="120" src="images/mpt4.png" alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="nav-icon">
					    <a href="#" class="right_bt" id="activator"><span> </span> </a>
				</div>
				<div class="box" id="box">
					<div class="box_content">        					                         
						<div class="box_content_center">
							<div class="form_content">
								<div class="menu_box_list">
									<ul>
										<li><a class="scroll" href="#about"><span>О ПРЕПОДАВАТЕЛЕ</span></a></li>
										<li><a class="scroll" href="#services"><span>СЕРТИФИКАТЫ</span></a></li>
										<li><a class="scroll" href="#news"><span>НОВОСТИ</span></a></li>
										<div class="clearfix"> </div>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"> <span> </span></a>
							</div>                                  
						</div> 	
					</div> 
				</div>       	  
			</div>
			<!---start-click-drop-down-menu----->
			        <!----start-dropdown--->
			         <script type="text/javascript">
						var $ = jQuery.noConflict();
							$(function() {
								$('#activator').click(function(){
									$('#box').animate({'top':'0px'},900);
								});
								$('#boxclose').click(function(){
								$('#box').animate({'top':'-1000px'},900);
								});
							});
							$(document).ready(function(){
							//Hide (Collapse) the toggle containers on load
							$(".toggle_container").hide(); 
							//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
							$(".trigger").click(function(){
								$(this).toggleClass("active").next().slideToggle("slow");
									return false; //Prevent the browser jump to the link anchor
							});
												
						});
					</script>
			<!---//End-click-drop-down-menu----->
			<div class="clearfix"> </div>
		</div>
		<div class="banner-info">
			<div class="banner-left">
				 <?php echo '<img src="' . $picture . '" style="border-radius: 100% " width="250px"; height="250px" />'; echo "<br />";?>
			</div>
			<div class="banner-right">
<?php
$name=$_COOKIE["name"];
$query = mysql_query("SELECT `name`,`email` FROM user where `name`='$name'");
    if($query==true)
    {
        while($res = mysql_fetch_array($query))
        {   
            $name= $res['name'];
        }   
    }
$strLength = iconv_strlen($name, 'UTF-8');
if ($strLength<22)
{
    echo '<h1 style="Font-size: 15px;">'.$name.'</h1>';
}
else
{
    
$arr=split(" ",@$name);

    echo '<h1 style="Font-size: 15px;text-align: ;">'.($arr[0].""." "." ".$arr[2]).'</h1>';
}
?>
				<div class="border"></div>
				<h2></h2>
                <h3 style="color: #c13c3c;">РЕЖИМ РЕДАКТИРОВАНИЯ</h3><br>
				<!-- <div class="down"><a href="admin.php">Редактировать сайт</a></div>-->
                <h3>ВЫБРАТЬ ФОН</h3><br>
                <form action="add_image.php" method="post">
                    <div class="background" style="">
                        <input type="hidden" name="about" value="about-b2.jpg">
<!--                        <input type="hidden" name="myskills" value="myskill-b2.jpg">-->
                        <input type="radio" name="banner" value="banner.jpg"><a style="padding:0px;"><img src="images/banner.jpg" width="70px" height="35px" style="border: 2px solid white;"></a>
                        <input type="radio" name="banner" value="banner2.jpg"><a style="padding:0px;"><img src="images/banner2.jpg" width="70px" height="35px" style="border: 2px solid white;"></a>
                        <input type="radio" name="banner" value="banner3.jpg"><a style="padding:0px;"><img src="images/banner3.jpg" width="70px" height="35px" style="border: 2px solid white;"></a>
                        <input type="radio" name="banner" value="banner4.jpg"><a style="padding:0px;"><img src="images/banner4.jpg" width="70px" height="35px" style="border: 2px solid white;"></a><br><br>
                        <input type="submit"  class="btn btn-info" value="Выбрать фон">
                    </div>
                </form>
			</div>
            
			<div class="clearfix"></div>
                
            
    
		</div>
	</div>
<?php echo'</div>' ?>
<!--/header-banner-->
<!--about-->
<div class="about text-center" id="about">
	<div class="container">
		<h3>О ПРЕПОДАВАТЕЛЕ</h3>
        <?php
        $tb = mysql_query("SELECT * FROM user WHERE `email`='$email'");
        $nr= mysql_num_rows($tb);
        while($res = mysql_fetch_array($tb))
        {
        if ($res['about']==""){
        echo '<a href="add_about.php">ДОБАВИТЬ ИНФОРМАЦИЮ О СЕБЕ</a>';
        }
        else {
            echo '<a  href="edit_about.php?id='.$res['id_user'].'" >ИЗМЕНИТЬ ИНФОРМАЦИЮ О СЕБЕ</a>';
        }
            break;
        }
        ?>
        
		<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
		<p>
            <?php
            $tb = mysql_query("SELECT * FROM user WHERE email='$email'");
            while($res = mysql_fetch_array($tb))
            {
                echo $res['about'];
                break;
            }
            ?></p>
	</div>
</div>
<!--//about-->
<?php
$q = mysql_query("SELECT * FROM images where `id_img`='$img_id'");
$res = mysql_fetch_array($q);
echo ' <div class="about-back" style="background-image: url(images/'.$res['about'].') ; " ></div>';

?>

<!--my skill-->
<!--//my skill-->
<?php
$q = mysql_query("SELECT myskills FROM images where `id_img`='$img_id'");
$res = mysql_fetch_array($q);
echo ' <div class="my-skill-back" style="background-image: url(images/'.$res['myskills'].') ; " ></div>';
?>
<!--education-->
<div id="services" class="education text-center">
	<div class="container">
		<div class="edu-info">
			<h3>СЕРТИФИКАТЫ</h3>
            <a href="add_sert.php">ДОБАВИТЬ СЕРТИФИКАТ</a>
		</div>
		<div class="strip text-center"><img src="images/edu.png" alt=" "/></div>
		<div class="edu-grids">
			<?php
            $q = mysql_query("SELECT * FROM user where `email`='$email'");
            $res = mysql_fetch_array($q);
            $user_id= $res['id_user'];
            $tb = mysql_query("SELECT * FROM sertificate WHERE `user_id`='$user_id'");
            $nr= mysql_num_rows($tb);
            while($res = mysql_fetch_array($tb))
            {
            echo 
            '
             <div class="col-md-4 edu-grid">
				<div class="edu-border">
                
					<div class="edu-grid-master">
                   <div class="work-grid" style="border: 1px solid rgba(226, 226, 226, 0);border-bottom: 2px solid rgba(195, 195, 195, 0);border-bottom: 2px solid 195, 195, 195, 0;">
                   
                <a  href="delete_sert_action.php?id='.$res['id_sert'].'" >Удалить</a> |
                <a  href="edit_sert.php?id='.$res['id_sert'].'" >Изменить</a>
                
                </div>
                
                   <p>'.$res['date'].' 
                    
                   </p> <span>'.$res['status'].'
                   
                   </span>
						<h3>'.$res['title'].'</h3>
						<h4>'.$res['zavedenie'].'</h4>
					</div>
					<div class="edu-grid-info">
						<h5>'.$res['info'].'</h5>
					</div>
				</div>
                
            </div> ';
                
                 
            }
            ?> 
			<!--<div class="col-md-4 edu-grid">
				<p>2012 - 2013</p><span>Graduated</span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3>MASTER DEGREE OF COMPUTER SCIENCE</h3>
						<h4>Oxford University</h4>
					</div>
					<div class="edu-grid-info">
						<h5>This is Photoshop's version Lorem Ipsum. 
						Well, the way they make shows is, they make one show.</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 edu-grid">
				<p>2012 - 2013</p><span>Graduated</span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3>MASTER DEGREE OF COMPUTER SCIENCE</h3>
						<h4>Oxford University</h4>
					</div>
					<div class="edu-grid-info">
						<h5>This is Photoshop's version Lorem Ipsum. 
						Well, the way they make shows is, they make one show.</h5>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>-->
	</div>
	
</div>
</div>
<!--//education-->
<div class="strip-border"><p></p></div>
<!--work-->

<div id="news" class="work-experience text-center">
	
	<div class="container">
        
		<div class="work-info">
			<h3>НОВОСТИ</h3>
            <a href="add_news.php">ДОБАВИТЬ НОВОСТЬ</a>
        </div>
		<div class="strip text-center"><img src="images/work.png" alt=" "/></div>
		 
               <div class="work-grids">
                   
            <?php
            $q = mysql_query("SELECT * FROM user where `email`='$email'");
            $res = mysql_fetch_array($q);
            $user_id= $res['id_user'];
            $tb = mysql_query("SELECT * FROM news WHERE `user_id`='$user_id'");
            while($res = mysql_fetch_array($tb))
            {
               echo '   
                <div class="col-md-4 w-grid">
                    
                    <div class="work-grid">
                        
                        <h3>'.$res['Date'].' 
                        <a class="bord" href="delete_new_action.php?id='.$res['id_news'].'" class="ss"><img width="20" style="float:right;margin-right: 3%;" src="images/delt.png"></a>
                        <a class="bord" href="edit_new.php?id='.$res['id_news'].'" ><img width="20" style="float:right;margin-right: 3%;" src="images/edit.png"></a>
                        </h3>
                        
                        <div class="work-grid-info">
                        
                            <h4>'.$res['Name_New'].'</h4>
                            <p>'.$res['Summar_New'].'</p>
                        </div>
                    </div>
                </div>
			
		
        
        ';
                
                
            }
        ?>
            </div>
     <div class="clearfix"></div>   
	</div>
</div>
<!--//work-->
<div class="services-back"></div>


<!--//resume-->

<!--footer-->
<div class="footer">
	<div class="container">
		<p>Copyright &copy; 2015 Kong. Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!--//footer-->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
<?php
        


?>
<!----------------------------------------------------------------------------------------------------------->


         
        
 
