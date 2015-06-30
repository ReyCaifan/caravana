<?php
/*
 * Posts Template
 * @author bilal hassan <info@smartcatdesign.net>
 * 
 */
?>
	<div class="col-md-12 item-page">
	<article id="post-<?php the_ID(); ?>">
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<?php the_date(); ?>
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
		<div class="text-right">
			<a class="button button-primary" href="<?php the_permalink(); ?>">Leer más</a>
		</div>
		</article><!-- #post-## -->
	</div>
