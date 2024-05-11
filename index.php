<?php
session_start();
require_once 'config/connect.php';
$isAuthorized = isset($_SESSION['user']);

?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<head>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Home</title>

<script src="https://cdn.tiny.cloud/1/89442eqlztxvjjtl5j62xlkf3gf1364xn3010cxzza1qlvvu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>



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
          <div id="showcase-row">
        <div class="row-container">
          <div class="container">
            <div class="row">
                <div class="moduletable   span12">

</div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
          <div id="feature-row">
        <div class="row-container">
          <div class="container">
            <div class="row">
                <div class="moduletable top_blocks  span12"><h1 class="moduleTitle ">Chess Website!</h1>
<div class="mod-newsflash-adv mod-newsflash-adv__top_blocks">

    
    
      <div class="row">
  
    
      <div class="span4 item item_num0 item__module  ">
    
				<div class="item_img img-intro img-intro__none"> 
			<a href="more1.php">
			<img src="images/top_blocks/top_blocks-1.jpg" alt=""></a> 
		</div>
	
<div class="item_content">

			<h2 class="item_title item_title__top_blocks">
					<span class="item_title_part0">Lorem</span> <span class="item_title_part1">ipsum 1</span> 				</h2>
	
	<div class="item_introtext"><p>
  <span class="black">
<span class="upper">Lorem ipsum</span>
Lorem Ipsum is simply dummy</span>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>
</div>

<?php
if ($isAuthorized) {
    echo '<a class="btn btn-info readmore" href="more1.php"><span>Learn more</span></a>';
} else {
    echo '<a class="btn btn-info readmore" href="login.php"><span>Log in</span></a>';
}
?>
</div>

<div class="clearfix"></div>      </div>

    
      <div class="span4 item item_num1 item__module  ">
     
				<div class="item_img img-intro img-intro__none"> 
			<a href="more2.php">
			<img src="images/top_blocks/top_blocks-2.jpg" alt=""></a> 
		</div>
	
<div class="item_content">

			<h2 class="item_title item_title__top_blocks">
					<span class="item_title_part0">Lorem</span> <span class="item_title_part1">ipsum</span> <span class="item_title_part2">2?</span> 				</h2>

	<div class="item_introtext"><p>
<span class="black">
<span class="upper">Lorem ipsum</span>
Lorem ipsum?</span>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>
</div>
<?php
if ($isAuthorized) {
    echo '<a class="btn btn-info readmore" href="more2.php"><span>Learn more</span></a>';
} else {
    echo '<a class="btn btn-info readmore" href="login.php"><span>Log in</span></a>';
}
?>
</div>

<div class="clearfix"></div>      </div>

    
      <div class="span4 item item_num2 item__module  lastItem">
 
				<div class="item_img img-intro img-intro__none"> 
			<a href="more3.php">
			<img src="images/top_blocks/top_blocks-3.jpg" alt=""></a> 
		</div>
	
<div class="item_content">

			<h2 class="item_title item_title__top_blocks">
					<span class="item_title_part0">Lorem</span> <span class="item_title_part1">ipsum</span> <span class="item_title_part2">3</span> 				</h2>
	
	<div class="item_introtext"><p>
<span class="black">
<span class="upper">Lorem ipsum</span>
Lorem Ipsum is simply dummy</span>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>
</div>


<?php
if ($isAuthorized) {
    echo '<a class="btn btn-info readmore" href="more3.php"><span>Learn more</span></a>';
} else {
    echo '<a class="btn btn-info readmore" href="login.php"><span>Log in</span></a>';
}
?>
</div>

<div class="clearfix"></div>      </div>

    
      </div> 
      
  
  <div class="clearfix"></div>

  
</div>
</div>
            </div>
          </div>
        </div>
      </div>
    
    <div id="content-row">
      <div class="row-container">
        <div class="container">
          <div class="content-inner row">
       
            <div id="component" class="span4">
             
     
                
<div id="system-message-container">
<div id="system-message">
</div>
</div>
                <div class="page-category page-category__home">

		<div class="page_header">
		<h3><span class="item_title_part0">Improve</span> <span class="item_title_part1">Your</span> <span class="item_title_part2">Chess!</span> </h3>	</div>
	
	
	
		

						<div class="items-row cols-1 row-0 row-fluid">
					<div class="span12">
				<div class="item column-1">

					<div class="item_img img-intro img-intro__left">
			<img src="images/home-1.jpg" alt="">
		</div>
		
			<div class="item_header">
<h4 class="item_title">							
<span class="item_title_part0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </h4>
							</h4>		
		
				</div>
        <div class="item_introtext"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis, turpis id semper laoreet, massa dui mollis urna, sit amet suscipit libero mauris ac risus</p>
</div>
				</div>
							</div>			
		</div>
		</div>
                          </div>
                          <div id="aside-right" class="span8">
              <div class="row">
                <aside>
                  <div class="moduletable news  span8"><h3 class="moduleTitle ">Last News</h3>
<div class="mod-newsflash-adv mod-newsflash-adv__news">
      <div class="row">
      <div class="span2 item item_num0 item__module  ">
    
<div class="item_content">

			<div class="item_published">
			21.11.2023		</div>
	
			<h4 class="item_title item_title__news">
					<span class="item_title_part0">Lorem ipsum </span> <span class="item_title_part1"> dolor sit amet </span> </h4>
	
	
	
	
	

	<div class="item_introtext"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis, turpis id semper laoreet, massa dui mollis urna, sit amet suscipit libero mauris ac risus. Praesent eu accumsan sem, sit amet consequat nunc. Curabitur tristique metus non consectetur scelerisque. In consectetur dui nec imperdiet blandit.</p>
</div>



  <?php
if ($isAuthorized) {
    echo '<a class="btn btn-info readmore" href="#"><span>Learn more</span></a>';
} else {
    echo '<a class="btn btn-info readmore" href="login.php"><span>Log in</span></a>';
}
?>
</div>


<div class="clearfix"></div>      </div>

    
      </div> 
  
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
                  	                    <a class="footer_logo" href="index-1.htm">
                      
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

