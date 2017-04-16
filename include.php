<!DOCTYPE html>
<?php
    include("config.php");
    mysql_set_charset('utf8');
?>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kong | Home</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->

</head>
<body>
<!-- banner -->
<div class="banner" id="home">
	<div class="container"> 
		<div class="top-header row">
			<script src="js/classie.js"></script>
			<!--top-nav---->
			<div class="logo">
				<a href="index.php"><img width="70" src="images/mpt.png" alt=""/></a>
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
				<img src="images/1.png" alt=""/>
			</div>
			<div class="banner-right">
				<h1>I’M JOHN DOE</h1>
				<div class="border"></div>
				<h2>UX - UI DESIGNER</h2>
				<div class="down"><a href="admin.php">ВОЙТИ</a></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--/header-banner-->
<!--about-->
<div class="about text-center" id="about">
	<div class="container">
		<h3>О ПРЕПОДАВАТЕЛЕ</h3>
		<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
		<p>Dyin' ain't much of a livin', boy. here. put that in your report!" and "i may have found 
		a way out of here. you want a guarantee, buy a toaster. here. put that in your report!" and 
		"i may have found a way out of here. this is the ak-47 assault rifle, the preferred weapon of 
		your enemy; and it makes a distinctive sound when fired at you, so remember it. this is the ak-47 
		assault rifle, the preferred weapon of your enemy; and it makes a distinctive sound when fired at 
		you, so remember it. don't p!ss down my back and tell me it's raining. this is the ak-47 assault 
		rifle, the preferred weapon of your enemy; and it makes a distinctive sound when fired at you, 
		so remember it. don't p!ss down my back and tell me it's raining. this is my gun, clyde! man's 
		gotta know his limitations. ever notice how sometimes you come across somebody you shouldn't have 
		f**ked with? well, i'm that guy.</p>
	</div>
</div>
<!--//about-->
<div class="about-back"></div>
<!--my skill-->
<!--//my skill-->
<div class="my-skill-back"></div>
<!--education-->
<div id="services" class="education text-center">
	<div class="container">
		<div class="edu-info">
			<h3>СЕРТИФИКАТЫ</h3>
		</div>
		<div class="strip text-center"><img src="images/edu.png" alt=" "/></div>
		<div class="edu-grids">
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
            $tb = mysql_query("SELECT * FROM news where type=1");
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
                        <a href="full.php?id='.$res['id_news'].'">Подробнее...</a>
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