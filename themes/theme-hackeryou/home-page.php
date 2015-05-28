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
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
		<!-- 	<h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
		<!-- 	<h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>

		<div class="overlay">
			<div class="modal">
				This is a modal box. We can close it with the &times; in the corner.
				<a href="" class="close">&times;</a>
			</div>
		</div>
	</section>

	<section class="catering">
	<div class="container">
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>

			<p><?php the_content();?></p>

		<?php endwhile; // end of the loop. ?>
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