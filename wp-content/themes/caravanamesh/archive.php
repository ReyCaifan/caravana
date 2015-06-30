<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package caravanaMesh
 */

get_header(); ?>

	<div id="content" class="site-content page-content-single">
		<main id="main" class="col-md-12" role="main">

		<?php if ( have_posts() ) : ?>

			<header>
				<?php
					the_archive_title( '<h1 class="page-title center">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="row">
                <!--div class=" page-content col-md-12"-->
                <div class=" page-content">
                    <div class="col-md-9 item-page">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
			
							<?php
			
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							?>
			
						<?php endwhile; ?>
			
						<?php the_posts_navigation(); ?>
					</div>
					<div class="col-md-3 caravanamesh-sidebar">
                        	<?php get_sidebar('left'); ?>
					</div>
				</div>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="page-content-single">
	<?php get_footer(); ?>
</div>
