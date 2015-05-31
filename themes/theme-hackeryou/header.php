<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container clearfix">
      

    <!-- <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        // <?php bloginfo( 'name' ); ?>
      </a>
    </h1> -->

  <!--   <?php wp_nav_menu( array(
      // 'container' => false,
      // 'theme_locations' => 'primary'
    )); ?> -->
    <nav class="mainNav">
      <ul>
        <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="http://localhost/hamburger/blog/">Blog</a></li>
      </ul>
    </nav><!-- End mainNav -->

    <nav class="sideNav">
      <span class="fa fa-bars fa-2x" title="menu"></span>
      <ul class="dropdown wrapper">
        <li>LOCATION: 123 Fake St.</li>
        <li>HOURS: Open 24hrs 7 Days a Week</li>
        <li>Social Links</li>
        <li>COPYRIGHT &copy; 2015 | Hamburer</li>
        <li>IMAGES YO</li>
      </ul>
    </nav>
  </div> <!-- /.container -->
</header><!--/.header-->

