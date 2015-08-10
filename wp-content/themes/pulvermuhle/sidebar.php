<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<aside id="sidebar" class="small-12 large-4 columns" data-equalizer-watch>
	<!-- encarts en image (provisoires) -->
	<div class="row">
	<div class="columns small-6 medium-4 large-12">
	<img src="<?php bloginfo('template_url'); ?>/img/fake_widget_recettes.jpg">
	</div><div class="columns  small-6  medium-4 large-12">
	<img src="<?php bloginfo('template_url'); ?>/img/fake_widget_image.jpg">
	</div><div class="columns  small-6  medium-4 large-12">
	<img src="<?php bloginfo('template_url'); ?>/img/fake_widget_produits.jpg">
	</div></div>
	
	
	<!-- widgets -->
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>