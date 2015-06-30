<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package caravanaMesh
 */

if ( ! is_active_sidebar( 'sidebar-header-right' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-header-right' ); ?>
</div><!-- #secondary -->
