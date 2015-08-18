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
?>
<!--<div class="small-12 medium-6 large-6 columns lr-padding">-->
<li>
<article class="post-archive panel" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="post_date"><?php echo get_the_date('F Y') ?></div>
	
	<div class="thumb-actualites">
		<?php
		
		  echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">';
		?>

		<?php
if ( has_post_thumbnail() ) {
	
			the_post_thumbnail('archive-thumbs');                  
		
		} else {
	?>
		
<img src="<?php bloginfo('template_url')?>/img/actu-thumb-defaut.jpg" class="attachment-actualites-home-thumbs wp-post-image" alt="<?php echo esc_attr( get_the_title() ) ?> ">
		<?php } ?>

		<?php
			echo '</a>'; 
			 
		?>
			
	</div>
	
	<div class="content-actualites">
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php //foundationpress_entry_meta(); ?>

		<div class="entry-content">
			<?php $content=get_the_content();
			echo "<p>".tronk($content, 60, "...")."</p>"; ?>
		</div>

		
		
	</div>
	
	<div class="read-more-container"> 
			<?php echo '<a href="' . get_the_permalink() . '" class="read-more-link" title="' . esc_attr( get_the_title() ) . '">Voir la recette</a>'; // wpml repere
?>
		</div>

</article>
<!--</div>-->
</li>