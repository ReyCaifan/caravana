<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package caravanaMesh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 item-page'); ?>>
	<header>
		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="caravanamesh-underline"></div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caravanamesh' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caravanamesh' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

