<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<?php if (!is_front_page()) { ?>
<section class="caroussel-gallery">
	<?php
	if ( function_exists( 'soliloquy' ) ) { soliloquy( '129' ); } 
	?>
</section>
<?php } ?>

</section>
<div class="full-width" id="footer-container">
	<footer class="row">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<div id="col1" class="medium-12 large-3 columns show-for-large-up">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
		<div id="col2" class="medium-12 large-6 columns">
		<?php dynamic_sidebar( 'footer-widgets-col2' ); ?>
		</div>
		<?php if ( is_active_sidebar( 'footer-widgets-col3' ) ) { ?>
		<div id="col3" class="medium-12 large-3 columns">
		<?php dynamic_sidebar( 'footer-widgets-col3' ); ?>
		</div>
		<?php } ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>
		<div id="col4" class="medium-12 large-3 columns hide-for-large-up">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
	</footer>
</div>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>