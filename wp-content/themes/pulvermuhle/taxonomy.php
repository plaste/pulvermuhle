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

<div class="row produits archiverow" data-equalizer>
<!-- Row for main content area -->
	<div class="small-12 large-8 columns page-text-content" role="main" data-equalizer-watch>
		
	<header class="archives">
	<h1 class="title">Notre production au fil des saisons</h1>
		<div class="row second-menu-container">
		<?php
		$second_menu = array(
			'theme_location'  => '',
			'menu'            => 'Menu produits',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '14',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);
		wp_nav_menu($second_menu);
		?>
	</div>
	</header>
		
		<header><h2><?php echo $wp_query->queried_object->name; ?></h2></header>
		
	<div class="row">
		
	<?php 
	if ( have_posts() ) :	?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
			get_template_part( 'content', 'archives-produits' ); 
			?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; // End have_posts() check. ?>
	</div>
		
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
	<div class="clearer"></div>
</div>
<?php get_footer(); ?>
