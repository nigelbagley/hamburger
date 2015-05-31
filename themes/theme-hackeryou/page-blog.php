<?php

/*
	Template Name: Blog Page
*/

get_header();  ?>
<section class="blogHeader">
	

</section>
<div class="wallpaper clearfix">
	 <div class="container">
  <!-- <p>WHATS GOOOD MUTHAFUCKKKKA</p> -->

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	 
      <h2><?php the_title(); ?></h2>
      <p><?php the_author_posts_link(); ?><----Click Me, to see what this guys said!</p>
      <!-- <p>See what he has said!</p> -->

     <?php echo get_avatar( get_the_author_meta( 'ID' ), 190 ); ?>
      <?php the_content(); ?>
      



    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>