<?php

/*
	Template Name: Home-page
*/

get_header();  ?>

<div class="main">
  <div class="container">
  <p>WHATS GOOOD MUTHAFUCKKKKA</p>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>