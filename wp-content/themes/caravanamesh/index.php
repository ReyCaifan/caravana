<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package caravanaMesh
 */

get_header(); ?>
<script type="text/javascript">
					var $j = jQuery.noConflict();
	$j(document).ready(function() {
		$j('.latestPosts').jAccordion({
			headers : '.articleInfo',
			vertical : true,
			activeSlideAutoHeight : true,
			inactiveSlideSize : 80,
			activeSlideClass : 'activeItem',
			preloadImages : false,
			responsive : false
		});
	});
</script>
<div class="site-content-wrapper">
	<div id="content" class="site-content">
        <div class="col-md-12 item-home">
			<div class="img-prin"></div>
				<?php if ( have_posts() ) : ?>
				<div class="latestPosts noJS">
			        <ul class="jAccordion-slidesWrapper">
			
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<li class="jAccordion-slide">
							<?php
			
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content','index' );
							?>
						</li>
						<?php endwhile; ?>
			
			        </ul>
				</div>
				<div class="aux-nav">
					<?php the_posts_navigation(); ?>
				</div>
				<?php else : ?>
		
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
		
				<?php endif; ?>
			</div><!-- #primary -->
		</div>
	</div>
<?php get_footer(); ?>
