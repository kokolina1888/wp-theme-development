<?php 
/*
Theme Name: StonesMT
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title><?php wp_title(' '); ?></title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url')?>"/>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#slider').nivoSlider();
    });
  </script> 
  <?php
  wp_head();
  ?>
</head>

<body>
  <div id="main">
    <div id="menubar">
      <div id="welcome">
        <h1><a href="#">Welcome To Stones</a></h1>
      </div><!--close welcome-->
      <div id="menu_items">
        <ul id="menu">
          <?php 
          if (has_nav_menu('header-menu')) :
            wp_nav_menu(array('theme_location' => 'header-menu', 
              'menu_id' => 'menu',
              'container_id' => 'menu_items'));
          else:
            ?>
          <li class="current"><a href="index.html">Home</a></li>
          <li><a href="ourwork.html">Our Work</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <?php
          endif; 
          ?>
        </ul>
      </div><!--close menu-->
    </div><!--close menubar-->  
    
    <div id="site_content">   

      <div id="banner_image">
        <div id="slider-wrapper">        
          <div id="slider" class="nivoSlider">
            <img src="<?php echo get_template_directory_uri()?>/images/home_1.jpg" alt="" />
            <img src="<?php echo get_template_directory_uri()?>/images/home_2.jpg" alt="" />
          </div><!--close slider-->
        </div><!--close slider_wrapper-->
      </div><!--close banner_image--> 