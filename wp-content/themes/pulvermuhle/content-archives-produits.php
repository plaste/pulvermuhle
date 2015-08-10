<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

$term_list = wp_get_post_terms($post->ID, 'categorie-de-produits', array("fields" => "names"));
$main_term = $term_list[0];

?>
<!--<div class="small-12 medium-6 large-6 columns lr-padding">-->
<article class="post-archive panel" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="thumb-produits">
		<?php
		
		  echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">';
		?>

		<?php
if ( has_post_thumbnail() ) {
	
			the_post_thumbnail('medium');                  
		
		} else {
	?>
		
<img src="<?php bloginfo('template_url')?>/img/actu-thumb-defaut.jpg" class="attachment-actualites-home-thumbs wp-post-image" alt="<?php echo esc_attr( get_the_title() ) ?> ">
		<?php } ?>

		<?php
			echo '</a>'; 
			 
		?>
			
	</div>
	
	<div class="content-produits">
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php //foundationpress_entry_meta(); ?>

		<div class="entry-content">
			<b><?php echo types_render_field("varietes", array("raw" => "true")); ?><br /><?php echo $main_term ?></b>
			<?php $content=get_the_content();
			echo "<p>".tronk($content, 120, "...")."</p>"; ?>
			<b>Production :</b> <?php echo types_render_field("debut-production", array("raw" => "true")); ?> > <?php echo types_render_field("fin-production", array("raw" => "true")); ?>
			<br />Mois cochés : <?php echo types_render_field("mois-production", array("separator"=>", ","html" => "true")); ?>
			 
		</div>

	</div>
	<div class="clearer"></div>


</article>
<!--</div>-->