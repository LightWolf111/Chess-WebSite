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
  <title>News</title>
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
                    <a href="index-1.htm">
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
    echo '<li class="item-169"><a href="gallery.php">Tournaments</a></li>';
    echo '<li class="item-109 active deeper parent"><a href="news.php">News</a></li>';
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
   
                    
            <div id="component" class="span8">
        
                      
                
<div id="system-message-container">
<div id="system-message">
</div>
</div>
                <div class="page-blog page-blog__">

		<div class="page_header">
		<h3><span class="item_title_part0">News</span> </h3>	</div>
	
	
	
		

						<div class="items-row cols-1 row-0 row-fluid">
					<div class="span12">
				<div class="item column-1">

					<div class="item_img img-intro img-intro__left">
			<img src="../images/blog/blog-thumb1.jpg" alt="">
		</div>
		

								<div class="item_published">
									21.11.2023 					</div>

			<div class="item_header">
					<h4 class="item_title">									<a href="#"> <span class="item_title_part0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </span> </a>
							</h4>		
				</div>
	
	

					<div class="item_info">
			<dl class="item_info_dl">
							<dd>
					<div class="item_category-name">
	Category: <a href="">Developing</a>											</div>
				</dd>
									<dd>
						<div class="item_createdby">
	Author:  <a href="https://vk.com/lightwolf7">LightWolf</a>												</div>
					</dd>	
									<dd>
						<div class="item_hits">
							Views: 223					</div>
					</dd>
				
						</dl>
		</div>
	
			

	<div class="item_introtext"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis, turpis id semper laoreet, massa dui mollis urna, sit amet suscipit libero mauris ac risus.</p>
</div>


			<a class="btn btn-info" href="#"><span>
		Learn More		</span></a>
	
<div class="kmt-readon">
	
		<span class="kmt-comment aligned-left">
		<a href="">Comments (3)</a>
	</span>
	
	</div>				</div>
							</div>
						
		</div>
							<div class="items-row cols-1 row-1 row-fluid">
					
						
		</div>
						
	

			
	<div class="pagination">
				<ul><li class="pagination-start"></ul> </div>
	</div>

        

                          </div>
        
           
                          <div id="aside-right" class="span4">
              <div class="row">
                <aside>
                  <div class="moduletable recent_posts  span4"><h3 class="moduleTitle ">Last Posts</h3><div class="mod-newsflash-adv mod-newsflash-adv__recent_posts">

    

  
    <div class="item item_num0 item__module ">
      


<div class="item_content">

			<div class="item_published">
			21.11.2023 		</div>
		
			<h4 class="item_title item_title__recent_posts">
					<a href="#">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a>
				</h4>
	
	
	
	
	

	<div class="item_introtext"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis, turpis id semper laoreet, massa dui mollis urna, sit amet suscipit libero mauris ac risus.</p></div>

	</div>

<div class="clearfix"></div>    </div>
  
    <div class="item item_num1 item__module ">
      



<div class="clearfix"></div>    </div>
  
  <div class="clearfix"></div>

  </div>
</div>
                </aside>
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
 