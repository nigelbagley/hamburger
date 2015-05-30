<?php

/*
	Template Name: Blog-page
*/

get_header();  ?>
 	<section class="aboutHeader">
 		

 	</section>

	<div class="wallpaper clearfix">
	 	<div class="container">
	 	<h1>Blog</h1>
		 	<div class="aboutContainer">
		 	
		 	<?php echo do_shortcode( '[add_posts category=category-slug tag=tag-slug show=5] ' ); ?>
		 	<!-- 	<div class="aboutUs">
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
		 		</div> -->

		 	</div>
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