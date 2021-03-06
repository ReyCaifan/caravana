<?php
/**
 * The default template for displaying content
 *
 * Used for both single and front-page/index/archive/search.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		// Display a thumbnail if one exists and not on single post
		if( has_post_thumbnail() ) {
			?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'large', array( 'class' => 'image-full alignnone' ) ); ?>
			</a>
			<?php
		}
		?>
	
		<div class="row">
			<div class="col-md-3 entry-meta">
				<p><i class="fa fa-bookmark"></i> <?php _e( 'Posted in ', 'national' ); the_category( ', ' ); ?></p>
				
				<?php if ( comments_open() ) { ?>
				<p><i class="fa fa-comments"></i> <?php comments_popup_link( __( '0 Comments', 'national' ), __( '1 Comment', 'national' ), __( '% Comments', 'national' ), '', '' ); ?></p>
				<?php } ?>
			</div>
			<div class="col-md-9">
				<h1 class="entry-title taggedlink">
					<?php if ( is_single() ) : ?>
						<?php the_title(); ?>
					<?php else : ?>
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					<?php endif; // is_single() ?>
				</h1>
	
				<div class="entry-meta">
					<?php
					printf( __( 'by %s on %s', 'national' ),
						'<span class="vcard author"><span class="fn"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . esc_attr( sprintf( __( 'Posts by %s', 'national' ), get_the_author() ) ) . '" rel="author">' . get_the_author() . '</a></span></span>', '<a href="' . get_permalink() . '" class="time"><time class="date published updated" datetime="' . esc_attr( get_the_date( 'Y-m-d' ) ) . '">' . get_the_date() . '</time></a>'
						);
					?>
				</div>
	
			    <div class="entry-content description clearfix">
				    <?php
					if ( is_singular() )
					    the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'national') );
					else
						the_excerpt();
					?>
			    </div><!-- .entry-content -->
		
			    <?php
			    if ( is_singular() )
			    	get_template_part( 'content', 'footer' ); ?>
			</div>
		</div>

	</article> <!-- #post-<?php the_ID(); ?> -->