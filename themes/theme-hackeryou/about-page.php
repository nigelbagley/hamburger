<?php

/*
	Template Name: About-page
*/

get_header();  ?>
 	<section class="aboutHeader">
 		

 	</section>

 	<section>
 			<div class="container">
			  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>

				<p><?php the_content();?></p>

			<?php endwhile; // end of the loop. ?>
		</div>
 	<div class="container">
 	<div class="aboutContainer">
 		<div class="aboutUs">
 			<i class="fa fa-cutlery"></i>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nesciunt!</p>
 		</div>
 		<div class="aboutUs">
 			<i class="fa fa-building-o"></i>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nesciunt!</p>
 		</div>
 	</div>
 	<div class="aboutContainer2">
 		<div class="aboutUs">
 			<i class="fa fa-cutlery"></i>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nesciunt!</p>
 		</div>
 		<div class="aboutUs">
 			<i class="fa fa-building-o"></i>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nesciunt!</p>
 		</div>
 	</div>
 	</div>
 	</section>
 	<div class="container">
 	<h1>Founders</h1>
 		<div class="founders">
 			<img src="http://www.fillmurray.com/200/200" alt="">
 			<p>Lorem ipsum dolor sit amet.</p>
 		</div>
 		<div class="founders">
 			<img src="http://www.fillmurray.com/200/200" alt="">
 			<p>Lorem ipsum dolor sit amet.</p>
 		</div>
 		<div class="founders">
 			<img src="http://www.fillmurray.com/200/200" alt="">
 			<p>Lorem ipsum dolor sit amet.</p>
 		</div>
 	</div>
	
<!-- Banner -->
<div class="main">
  <div class="container">
 
	<!-- End of Banner -->
<!-- One -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>