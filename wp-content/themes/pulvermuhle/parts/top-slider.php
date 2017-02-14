<?php
/**
 * Top site slider
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

$idpost=get_the_ID();
if (get_post_type($idpost)!= "produits" && get_post_type($idpost)!= "recettes" && get_post_type($idpost)!= "faq" && !is_page(1493) && !is_page(1501)   ) {;
?>
<!-- slider -->
<div class="row soliloquy">
<?php
$sliderID=do_shortcode('[types field="slider-id" id="'.$idpost.'"]');
$defaultSliderID='1481'; //11

if (isset($sliderID) && $sliderID>1) $defaultSliderID=$sliderID;
if ( function_exists( 'soliloquy' ) ) { 
	soliloquy( $defaultSliderID ); 
}
?>
</div>
<?php } // end if post type ?>
<!-- /slider -->