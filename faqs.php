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
  <title>FAQ</title>
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
                <li class="item-101 active deeper parent"><a href="index.php">Home</a></li>
                <li class="item-167"><a href="about-us.php">About us</a>
              
                </li>

                <li class="item-102"><a href="https://vk.com/lightwolf7">Contact</a></li>

                <?php
                if ($isAuthorized) {
                    echo '<li class="item-169"><a href="gallery.php">Tournament</a></li>';
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
                <div class="page-category page-category__faqs">

		<div class="page_header">
		<h3><span class="item_title_part0">FAQ</span> </h3>	</div>
	
	
	
		

						<div class="items-row cols-1 row-0 row-fluid">
					<div class="span12">
				<div class="item column-1">
					

			<div class="item_header">
      <h4 class="item_title">									<a href=""> <span class="item_title_part0">Lorem ipsum</span></a>							</h4>		
		
				</div>
	

	<div class="item_introtext"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>


				</div>
							</div>
						
		</div>
    <div class="items-row cols-1 row-0 row-fluid">
      <div class="span12">
    <div class="item column-1">
      

  <div class="item_header">
  <h4 class="item_title">									<a href=""> <span class="item_title_part0">Lorem ipsum</span></a>          </h4>		

    </div>


<div class="item_introtext"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>


    </div>
          </div>
        
</div>
<div class="items-row cols-1 row-0 row-fluid">
  <div class="span12">
<div class="item column-1">
  

<div class="item_header">
<h4 class="item_title">									<a href=""> <span class="item_title_part0">Lorem ipsum</span></a>      </h4>		

</div>


<div class="item_introtext"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>


</div>
      </div>
    
</div>
<div class="items-row cols-1 row-0 row-fluid">
  <div class="span12">
<div class="item column-1">
  

<div class="item_header">
  <h4 class="item_title">									<a href=""> <span class="item_title_part0">Lorem ipsum</span></a>
      </h4>		

</div>


<div class="item_introtext"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>


</div>
      </div>
    
</div>
                          </div>
                          <div id="aside-right" class="span4">
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
