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
<div id="featured-archive" class="row">
<article class="post-archive featured" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="post_date"><?php the_date() ?></div>
	
	<div class="thumb-actualites">
		<?php
if ( has_post_thumbnail() ) {
	echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">';
	the_post_thumbnail('single-thumbs');   
	echo '</a>'; 

} else {
	echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">';
?>
		<img src="<?php bloginfo('template_url')?>/img/recette-thumb-defaut.jpg" class="attachment-actualites-home-thumbs wp-post-image" alt="<?php echo esc_attr( get_the_title() ) ?> ">
<?php
	echo '</a>';  
} ?>
			
	</div>
	
	<div class="content-actualites">
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php //foundationpress_entry_meta(); ?>

		<div class="entry-content">
			<?php $content=get_the_content();
			echo "<p>".tronk($content, 60, "...")."</p>"; ?>
		</div>
		
		<div class="read-more-container"> 
			<?php echo '<a href="' . get_the_permalink() . '" class="read-more-link" title="' . esc_attr( get_the_title() ) . '"></a>'; // wpml repere
?>
		</div>

		
		
	</div>
	
	

</article>
</div>