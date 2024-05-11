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
                <div class="page-item page-item__">

					
		<div class="item_header">
		<h3 class="item_title">										<span class="item_title_part0">Lorem</span> <span class="item_title_part1">ipsum?</span> 					</h3>	</div>
	
	
	
	
		
					<div class="item_img img-full img-full__left item-image"> <img src="../../images/top_blocks/top_blocks-1.jpg" alt=""> </div>
			
	<div class="item_fulltext"><p>
<span class="black">
<span class="upper">Lorem ipsum dolor sit amet, lorem</span>
Consec tetuer adipicing it. Praesebul lorem ipsum.</span>
S natoque penatibus et gnis dent monteiculu.
</p>
 
<p>Nam nec lectus ut orci porta volutpat id at purus. Sed sagittis congue dapibus. Proin dolor metus, pharetra ut pulvinar nec, condimentum quis libero. Sed fermentum tortor ac elit tristique vel dapibus sem porta. Suspendisse aliquet posuere ultrices. Proin facilisis libero lacinia erat pretium faucibus. In tortor nunc, posuere eget commodo et, eleifend vel risus.</p>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Pellentesque non libero dui, vitae pharetra urna. Vestibulum accumsan pulvinar magna sed consectetur. Nulla congue condimentum aliquam. Donec non libero lectus, id mollis nisi. Morbi turpis magna, varius in ullamcorper nec, suscipit sagittis nibh. Nam elementum aliquam turpis eget egestas. Cras ligula nisi, interdum et vulputate nec, sagittis a tellus. In hac habitasse platea dictumst. In in sem libero. Fusce cursus, metus eu commodo hendrerit, arcu nibh consequat lectus, nec suscipit eros urna in ipsum. Praesent et enim a nisl commodo sodales non id neque. Ut sodales dignissim massa vitae hendrerit. Sed porttitor purus ut ante fermentum quis mollis velit pellentesque.</p>
<p>Etiam nisi felis, fermentum vitae ultrices non, euismod in magna. In mattis velit ut eros tristique a congue erat consequat. Suspendisse consequat, justo eu gravida semper, ligula turpis dignissim dolor, vitae lacinia velit metus id libero. Nullam consectetur rhoncus magna, quis pharetra tortor bibendum quis. Curabitur ac ante nisl. Nullam mauris arcu, malesuada eu consectetur non, eleifend quis est. Nullam dictum, leo vulputate elementum porttitor, enim mi posuere augue, id porttitor leo sapien sed libero. Quisque est velit, aliquam bibendum vestibulum eget, tristique a odio.</p></div>


	<div class="addthis_toolbox addthis_default_style "><a class="addthis_button_google_plusone" g:plusone:size="medium"></a><a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:locale="en_US"></a><a class="addthis_button_tweet"></a><a class="addthis_button_pinterest_pinit"></a><a class="addthis_counter addthis_pill_style"></a></div>

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
