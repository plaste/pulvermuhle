<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>

<!-- slider -->
<div class="row soliloquy">
<?php
if ( function_exists( 'soliloquy' ) ) { soliloquy( '11' ); }
?>
</div>
<!-- /slider -->

<div class="row">
	<div class="small-12 large-8 columns page-text-content" role="main" data-equalizer-watch>
		
		<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part("content", "single-produits"); ?>

<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>