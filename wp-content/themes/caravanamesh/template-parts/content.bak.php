<?php
/**
 * Template part for displaying posts.
 *
 * @package caravanaMesh
 */

?>
<div  id="post-<?php the_ID(); ?>" <?php post_class('articleInfo'); ?>>
<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
 <!--em>September 12, 2012</em></div-->
<?php if ( 'post' == get_post_type() ) : ?>
		<em>
			<?php caravanamesh_posted_on(); ?>
		</em></div><!-- .entry-meta -->
		<?php endif; ?>
<!--p><img width="48" height="48" alt="icon" src="jAccordion/images/icon.png">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sem quis risus dictum ullamcorper at eget sem. Cras aliquam nisi at nibh faucibus sed venenatis nibh placerat <a href="#">more...</a></p-->
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail(array(48,48));
} 
?>
<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'caravanamesh' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caravanamesh' ),
				'after'  => '</div>',
			) );
		?>
		
