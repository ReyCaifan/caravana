<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package caravanaMesh
 */

get_header(); ?>

	<div id="content" class="site-content page-content-single ">
		<main id="main" class="" role="main">

			<section class="not-found col-md-12">
					<div class="page-title"><div class="row center"><?php esc_html_e( 'Oops! ¿Dónde ha quedado esa página?.', 'caravanamesh' ); ?></div></div>
				<div class="row">
					<div class="page-content">
						<div class="error-404 col-md-9 item-page">
							<p><?php esc_html_e( 'No hemos encontrado contenido relacionado, prueba algunos de los siguientes links o realizar una busqueda.', 'caravanamesh' ); ?></p>
		
							<?php get_search_form(); ?>
		
							<?php /*the_widget( 'WP_Widget_Recent_Posts' );*/ ?>
		
							<?php if ( caravanamesh_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'caravanamesh' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->
							<?php endif; ?>
		
							<?php
								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Revisa el archivo por meses. %1$s', 'caravanamesh' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
							?>
		
							<?/*php the_widget( 'WP_Widget_Tag_Cloud' );*/ ?>
						</div>
						<div class="col-md-3 caravanamesh-sidebar">
							<?php get_sidebar('left'); ?>
						</div>
					</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<div class=" page-content-single">
	<?php get_footer(); ?>
</div>
