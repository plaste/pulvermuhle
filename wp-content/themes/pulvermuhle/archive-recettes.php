<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<div class="row recettes">
<!-- Row for main content area -->
	<div class="small-12 large-8 columns page-text-content" role="main" data-equalizer-watch>
		
	<header>
	<h1 class="title">Nos recettes</h1>
	</header>
		
		<?php
			$count=0;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if ( have_posts() && $paged==1 ) : ?>

		<?php /* Start the Loop */ 
		
		?>
		<?php while ( have_posts() ) : the_post(); 
		if ($count==0) { ?>
			<?php get_template_part( 'content', 'archives-featured' ); ?>
		<?php 
				$count++;	   }
endwhile; ?>


	<?php 
		
		
	endif; // End have_posts() check.
		
		?>
		
	<ul class="small-block-grid-1 medium-block-grid-2 grid-block-container">
		
	<?php 
	$count=0;
	if ( have_posts() ) :	?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
			if ($count>0 || $paged!=1) {
			get_template_part( 'content', 'archives-recettes' ); 
			}
			$count++;
			?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; // End have_posts() check. ?>
	</ul>
		
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
