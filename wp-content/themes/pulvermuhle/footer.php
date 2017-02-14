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
		<div id="col2" class="medium-12 large-5 columns">
		<?php dynamic_sidebar( 'footer-widgets-col2' ); ?>
		</div>
		<?php
		$cal34isactive=false;
		if ( is_active_sidebar( 'footer-widgets-col3' ) && $cal34isactive==true ) {
		?>
		<div id="col3" class="medium-12 large-3 columns">
		<?php dynamic_sidebar( 'footer-widgets-col3' ); ?>
		</div>
		<?php } ?>
		<?php if ( is_active_sidebar( 'footer-widgets' )  && $cal34isactive==true) { ?>
		<div id="col4" class="medium-12 large-3 columns hide-for-large-up">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php } ?>
		<div id="col4" class="medium-12 large-4 columns">

			<div class="footer-logo"><a href="http://www.bio-suisse.ch/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/logos/biosuisse-footer2x.png" width="68"></a></div>
			<div class="footer-logo"><a href="http://www.bioland.de/start.html" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/logos/bioland-footer2x.png" width="51"></a></div>
			<div class="footer-logo logo-ab"><a href="http://www.opaba.org/bioenalsace/consommer-bio/principes-ab" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/logos/Agriculture-Biologique-AB-footer2x.png" width="53"></a></div>
			<div class="footer-logo"><a href="http://www.ecocert.fr/agriculture-biologique" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/logos/biosiegel-footer2x.png" width="70"></a></div>

		</div>
		</div>
	</footer>
</div>
<?php do_action( 'foundationpress_after_footer' ); ?>
<a class="exit-off-canvas"></a>
	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/update.css">
</body>
</html>
