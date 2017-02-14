<?php
/**
 * Random Image
 *
 * @package WordPress
 * @subpackage pulvermuhle
 * 
 */
 
$nbImages=17;
$selectionImage=rand(1,$nbImages);
?>
<img src="<?php bloginfo('template_url'); ?>/img/random-backgrounds/random_<?php echo $selectionImage; ?>.jpg">