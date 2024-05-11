<?php
session_start();
require_once 'config/connect.php';

if (!isset($_SESSION['user'])) {
    header('Location: /index.php');
    exit(); 
}


$isAuthorized = isset($_SESSION['user']);

?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<head>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Tournament</title>
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/default.css" type="text/css">
  <link rel="stylesheet" href="css/template.css" type="text/css">
  <link rel="stylesheet" href="css/touch.gallery.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">
  <link rel="stylesheet" href="css/komento.css" type="text/css">
  <link rel="stylesheet" href="css/camera.css" type="text/css">
  <link rel="stylesheet" href="css/superfish.css" type="text/css">
  <link rel="stylesheet" href="css/superfish-navbar.css" type="text/css">
  <link rel="stylesheet" href="css/superfish-vertical.css" type="text/css">

</head>

<body class="com_content view-category task- itemid-101 body__home">
  <div id="wrapper">
    <div class="wrapper-inner">
    <div class="top_container">
      <div id="header-row">
        <div class="row-container">
          <div class="container">
          <header>
              <div class="row">
                  <div id="logo" class="span4">
                    <a href="index.php">
                    </a>
                  </div>
                  <div class="moduletable navigation span8">
            <ul class="sf-menu">
                <li class="item-101"><a href="index.php">Home</a></li>
                <li class="item-167"><a href="about-us.php">About us</a>
              
                </li>

                <li class="item-102"><a href="https://vk.com/lightwolf7">Contact</a></li>

                <?php
                if ($isAuthorized) {
                    echo '<li class="item-169 active deeper parent"><a href="gallery.php">Tournament</a></li>';
                    echo '<li class="item-109"><a href="news.php">News</a></li>';
                    echo '<li><a>' . $_SESSION['user']['full_name'] . '</a></li>';
                    echo '<li><a href="vendor/logout.php" class="logout">Log out</a></li>';
                } else {
                
                    echo '<li><a href="login.php">Sign in</a></li>';
                }
                ?>
            </ul>
        </div>
              </div>
            </header>
            </div>
        </div>
      </div>

   
    
    </div>

    <div id="content-row">
      <div class="row-container">
        <div class="container">
          <div class="content-inner row">
           <div id="component" class="span12">
         
                      
                
<div id="system-message-container">
<div id="system-message">
</div>
</div>
                
<div class="note"></div>


<div class="page-gallery page-gallery__gallery">

    <div class="page_header">
    <h3><span class="item_title_part0">Турниры</span> </h3>  </div>
  
  

         
  
    

  
      
    <div class="row-fluid">
      <ul id="isotopeContainer" class="gallery items-row cols-4">
                    
                
            <li class="gallery-item first_category">

     
          <div class="item_img img-intro img-intro__left"> 

      		        <a class="touchGalleryLink zoom" href="../images/gallery/gallery-img1.jpg">
	          <span class="zoom-bg"></span>
	          <span class="zoom-icon"></span>
	          <img src="../images/gallery/gallery-thumb1.jpg" alt="">
	        </a>
      	
      </div>
    
  

			<div class="item_header">
					<h4 class="item_title">									<a href=""> <span class="item_title_part0">Tournament #1</span> <span class="item_title_part1"></span> </a>
							</h4>		
		
				</div>
	
	

	<div class="item_introtext"><p>Suspendisse ac magna facilisis diam varius vestibulum sed ac eros. Morbi eleifend turpis non risus sagittis nec feugiat arcu sollicitudin. </p>
</div>


			<a class="btn btn-info" href="tournament1.php"><span>
        Learn More		</span></a>
	
                            <div class="clearfix"></div>
            </li>
                  
                      
            <li class="gallery-item first_category">
                

          <div class="item_img img-intro img-intro__left"> 

      		        <a class="touchGalleryLink zoom" href="../images/gallery/gallery-img2.jpg">
	          <span class="zoom-bg"></span>
	          <span class="zoom-icon"></span>
	          <img src="../images/gallery/gallery-thumb2.jpg" alt="">
	        </a>
      	
      </div>
    
  


			<div class="item_header">
					<h4 class="item_title">									<a href=""> <span class="item_title_part0">Tournament #2</span> <span class="item_title_part1"></span> </a>
							</h4>		
		
				</div>
	
	

	<div class="item_introtext"><p>Suspendisse ac magna facilisis diam varius vestibulum sed ac eros. Morbi eleifend turpis non risus sagittis nec feugiat arcu sollicitudin. </p>
</div>

			<a class="btn btn-info" href="tournament2.php"><span>
		Learn More		</span></a>
	
                            <div class="clearfix"></div>
            </li>
                  
                      
            <li class="gallery-item first_category">
                

         
    
  

			
    
  

  
  </div>

                          </div>
        
                      </div>
        </div>
      </div>
    </div>


        <div id="push"></div>
    </div>
  </div>

  <div id="footer-wrapper">
    <div class="footer-wrapper-inner">
      
        <div id="copyright-row">
          <div class="row-container">
            <div class="container">
              <div class="row">
                 
                  <div id="copyright" class="span6">
                  	                   
                      
                    </a>
  					          <span class="year">2023</span>					<span class="copy">&copy;</span>                                        <a class="privacy_link" href="https://vk.com/lightwolf7">LightWolf</a>
  					                                      </div>
                <div class="moduletable footer_links  span6"><div class="mod-menu">
	<ul class="nav menu ">
	<li class="item-236"><a href="https://vk.com/lightwolf7">Support</a></li><li class="item-237"><a href="faqs.php">FAQs</a></li><li class="item-238"></ul>
</div>
</div>
               
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  
  

  </body>
</html>
