<?php
/**
 * Template part for displaying single posts.
 *
 * @package caravanaMesh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9 item-page col2r'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php caravanamesh_posted_on(); ?>
		</div><!-- .entry-meta -->
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
		<?php caravanamesh_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
</article><!-- #post-## -->

