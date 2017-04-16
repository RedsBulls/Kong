<!DOCTYPE html>
<?php
    include("config.php");
    mysql_set_charset('utf8');
     include("OAuth.php");
    
    
?>
<html>
<?php 
include("head.php");
?>

<body>
<!-- banner -->
<?php
$q = mysql_query("SELECT * FROM images");
$res = mysql_fetch_array($q);
echo ' <div class="banner" id="home" style="background-image: url(images/'.$res['banner'].') ;" >'
?>
	<div class="container"> 
		<div class="top-header row">
			<script src="js/classie.js"></script>
			<!--top-nav---->
			<div class="logo">
				<a href="index.php"><img width="120" src="images/mpt4.png" alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="nav-icon">
					    <a href="#" class="right_bt" id="activator"><span></span> </a>
				</div>
				<div class="box" id="box">
					<div class="box_content">        					                         
						<div class="box_content_center">
							<div class="form_content">
								<div class="menu_box_list">
									<ul >
										
										<li ><a class="scroll" href="#about"><span>О ПРЕПОДАВАТЕЛЕ</span></a></li>
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
				<img src="images/1.png" alt=""/>
			</div>
			<div class="banner-right">
				<h1>I’M JOHN DOE</h1>
				<div class="border"></div>
				<h2>UX - UI DESIGNER</h2>
<!--				<div class="down"><a href="admin.php">ВОЙТИ</a></div>-->
                <?php
echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">ВОЙТИ</a></p>';
// https://accounts.google.com/o/oauth2/auth?redirect_uri=http://localhost/google-auth&response_type=code&client_id=333937315318-fhpi4i6cp36vp43b7tvipaha7qb48j3r.apps.googleusercontent.com&scope=https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile
  
?>
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
        
		<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
		<p><?php
            $tb = mysql_query("SELECT about FROM user ");
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
$q = mysql_query("SELECT about FROM images");
$res = mysql_fetch_array($q);
echo ' <div class="about-back" style="background-image: url(images/'.$res['about'].') ;" ></div>';
?>
<!--my skill-->
<!--//my skill-->
<?php
$q = mysql_query("SELECT myskills FROM images");
$res = mysql_fetch_array($q);
echo ' <div class="my-skill-back" style="background-image: url(images/'.$res['myskills'].') ;" ></div>';
    ?>
<!--education-->
<div id="services" class="education text-center">
	<div class="container">
		<div class="edu-info">
			<h3>СЕРТИФИКАТЫ</h3>
		</div>
		<div class="strip text-center"><img src="images/edu.png" alt=" "/></div>
        <div class="edu-grids">
			<?php
            $tb = mysql_query("SELECT * FROM sertificate");
            $nr= mysql_num_rows($tb);
            while($res = mysql_fetch_array($tb))
            {
            echo 
            '
             <div class="col-md-4 edu-grid">
				<div class="edu-border">
					<div class="edu-grid-master">
                   <p>'.$res['date'].'</p> <span>'.$res['status'].'</span>
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
				
				<div class="edu-border">
                    
					<div class="edu-grid-master">
                        <p>2012 - 2013</p><span>Graduated</span>
						<h3>MASTER DEGREE OF COMPUTER SCIENCE</h3>
						<h4>Oxford University</h4>
					</div>
					<div class="edu-grid-info">
						<h5>This is Photoshop's version Lorem Ipsum. 
						Well, the way they make shows is, they make one show.</h5>
					</div>
				</div>
			</div>-->
			<div class="clearfix"></div>
		</div>
            
	</div>
	
</div>
<!--//education-->

<div class="strip-border"><p></p></div>
<!--work-->
<div id="news"class="work-experience text-center">
	
	<div class="container">
		<div class="work-info">
			<h3>НОВОСТИ</h3>
		</div>
		<div class="strip text-center"><img src="images/work.png" alt=" "/></div>
		 
               <div class="work-grids">
            <?php
            $tb = mysql_query("SELECT * FROM news");
            while($res = mysql_fetch_array($tb))
            {
               echo '   
                <div class="col-md-4 w-grid">
                    
                    <div class="work-grid">
                        
                        <h3>'.$res['Date'].'</h3>
                        <div class="work-grid-info">
                            <h4>'.$res['Name_New'].'</h4>
                            <p>'.$res['Summar_New'].'</p>
                        </div>
                        <a href="ajax_f.html?id='.$res['id_news'].'">Подробнее...</a>
                        
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