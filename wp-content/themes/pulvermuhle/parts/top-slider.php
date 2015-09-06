<?php
/**
 * Top site slider
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<!-- slider -->
<div class="row soliloquy">
<?php

//$sliderID=types_render_field("slider-id", array("raw" => "true", "id" => "".get_the_ID()."");

$idpost=get_the_ID();
$sliderID=do_shortcode('[types field="slider-id" id="'.$idpost.'"]');
echo "ID : ".$idpost." / ".$sliderID;
//echo(do_shortcode('[types field="slider-id" id="'.$idpost.'"]'));

$defaultSliderID='11';
if (isset($sliderID) && $sliderID>1) $defaultSliderID=$sliderID;
if ( function_exists( 'soliloquy' ) ) { soliloquy( $defaultSliderID ); }
?>
</div>
<!-- /slider -->