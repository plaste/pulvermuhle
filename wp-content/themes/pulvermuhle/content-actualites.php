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

<article class="post-actualite" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="thumb-actualites">
		<?php
		
		  echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">';
		?>

		<?php
if ( has_post_thumbnail() ) {
	
			the_post_thumbnail('actualites-home-thumbs');                  
		
		} else {
	?>
		
<img width="385" height="85" src="<?php bloginfo('template_url')?>/img/actu-thumb-home-defaut.jpg" class="attachment-actualites-home-thumbs wp-post-image" alt="<?php echo esc_attr( get_the_title() ) ?> ">
		<?php } ?>

		<?php
			echo '</a>'; 
			 
		?>
			
	</div>
	
	<div class="content-actualites">
		
		<h2><a href="<?php the_permalink(); ?>"><?php echo tronk(esc_attr( get_the_title() ), 30, "...") ?></a></h2>
			<?php //foundationpress_entry_meta(); ?>

		<div class="entry-content">
			<?php $content=get_the_content();
			echo "<p>".tronk($content, 60, "...")."</p>"; ?>
		</div>

		<div class="read-more-container"> 
			<?php echo '<a href="' . get_the_permalink() . '" class="read-more-link" title="' . esc_attr( get_the_title() ) . '"></a>';
?>
		</div>
		
	</div>

</article>