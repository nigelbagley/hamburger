<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- <div class="main">
  <div class="container">

    <div class="content">
    		<?php //get_template_part( 'loop', 'index' );	?>
    </div> 

    <?php //get_sidebar(); ?>

  </div> 
</div> --> 

<div id="main-wrapper">
	<div class="main-wrapper-style2">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="8u">
						<div id="content skel-cell-important">

							<!-- Content -->
							<?php if(have_posts()) while(have_posts()) : the_post(); ?>
								<article>
									<header class="major">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										
									</header>

									<span class="image image-full"><?php the_post_thumbnail('full'); ?></span>
									<?php the_content(); ?>
								</article>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="4u">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>