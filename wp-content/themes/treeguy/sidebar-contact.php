<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package bms
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="secondary" class="contact-widget-area sidebar span-four" role="complementary">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</div><!-- #secondary -->
