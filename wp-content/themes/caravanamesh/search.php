<?php
/**
 * The template for displaying search results pages.
 *
 * @package caravanaMesh
 */

get_header(); ?>

	<section id="primary" class="site-content page-content-single">
		<main id="main" class="site-main col-md-12" role="main">

		<?php if ( have_posts() ) : ?>

			<header>
				<h1 class="page-title center"><?php printf( esc_html__( 'Search Results for: %s', 'caravanamesh' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="row">
					<div class="page-content col-md-12">
						<div class="col-md-9">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
			
							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
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
	</section><!-- #primary -->
<div class="page-content-single">
	<?php get_footer(); ?>
</div>
