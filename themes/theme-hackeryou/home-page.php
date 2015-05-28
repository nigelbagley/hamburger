<?php

/*
	Template Name: Home-page
*/

get_header();  ?>
 	<section class="bannerHeader">
	 	<div class="headerMain">
	 		<h1>Hey there, want a burger?</h1>
	 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At soluta, sequi perferendis dignissimos voluptatum magnam illo aperiam ut, optio beatae!</p>
	 	</div>	
	</section>
	<section class="hamburgerChoices">
		<div class="hamburger">
			<img src="img/burger.jpg" alt="">
			<h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button>
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button>
		</div>



	</section>
<!-- Banner -->
<div class="main">
  <div class="container">
 
	<!-- End of Banner -->
<!-- One -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>