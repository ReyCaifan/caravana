<?php
/**
 * The template for displaying all single posts.
 *
 * @package caravanaMesh
 */

get_header(); ?>

	<div id="content" class="site-content site-content-wrapper page-content-single">
		<main id="main" class="page-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			

		<?php endwhile; // End of the loop. ?>
			<div class="col-md-3 caravanamesh-sidebar">
	                <?php get_sidebar('left'); ?>
	        </div>
		</main><!-- #main -->
	</div><!-- #content -->
<div class=" page-content-single">
	<?php get_footer(); ?>
</div>
