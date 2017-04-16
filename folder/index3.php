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
<head>
<meta charset="UTF-8">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title></title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<link href="css/style1.css" rel="stylesheet">

    <!--Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>    
</head>
<body >
    <div class="banner" id="home" style="background-image: url(images/banner5.jpg);"  >
	<div class="container"> 
		<div class="top-header row">
			
			<div class="logo">
				<a href="index.php"><img width="120" src="images/mpt4.png" alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="nav-icon">
					    <a href="#" class="right_bt" id="activator"><span></span> </a>
				</div>
      	  
			</div>
			<!---start-click-drop-down-menu----->
			        <!----start-dropdown--->
			        
			<!---//End-click-drop-down-menu----->
			<div class="clearfix"> </div>
		</div>
		<div class="banner-info">
			<div class="banner-left">
				
			</div>
			<div class="banner-right" style="text-align:right">

				<h2>CMS by <br>Alexander Azaryan &amp;<br> Dmitriy Dudarev </h2>
<!--				<div class="down"><a href="admin.php">ВОЙТИ</a></div>-->
                <?php
echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">ВОЙТИ</a></p>';
// https://accounts.google.com/o/oauth2/auth?redirect_uri=http://localhost/google-auth&response_type=code&client_id=333937315318-fhpi4i6cp36vp43b7tvipaha7qb48j3r.apps.googleusercontent.com&scope=https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile
  
?>
			</div>
<!--
            <div class="open_modal"><h1>Открыть модальное окно</h1></div>

    <div class="overlay"></div>
    <div class="popup">
        <div class="close_modal">x</div>
        <form class="form" action="">
            <h5>Полная информация</h5>
            <input type="text" required="" placeholder="Имя" name="txtname">
            
            <textarea name="txtmessage" placeholder="Описание" rows="10"></textarea>
            <input type="submit" class="btn btn-info">
    		
        </form>
    </div>
-->

  

    
		</div>
		</div>
		</div>

</body>
</html>