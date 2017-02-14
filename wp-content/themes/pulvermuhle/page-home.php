<?php
/*
Template Name: page d'accueil
*/
get_header(); ?>

<!-- contenu -->
<div class="row">
	
	<div class="row" data-equalizer>
		
	<div class="small-12 large-8 columns" data-equalizer-watch>
	
		<div class="small-12 large-6 columns show-for-large-up" role="presentation" data-equalizer-watch>
			<!-- left home sidebar -->
			<?php do_action( 'foundationpress_before_sidebar' ); ?>
			<?php dynamic_sidebar( 'sidebar-home-left' ); ?>
			<?php do_action( 'foundationpress_after_sidebar' ); ?>
		</div>
		<div id="home-actualites" class="small-12 large-6 columns" role="main" data-equalizer-watch>
			<header>
					<h1>Dernières actualités</h1>
			</header>

		<?php do_action( 'foundationpress_before_content' ); ?>
			
			
		<!-- actualités -->
		<?php 
		// query
		$parent_post_type= get_post_type();
		$childargs = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby' => 'post_date',
		'order' => 'DESC',
		);
		$the_query = new WP_Query( $childargs );
		// The Loop
		if ( $the_query->have_posts() ) {
		?>
		<!-- structure -->
		<div class="row container_actualites">
		<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			// posts
			get_template_part("content","actualites");
		?>
	<?php } // endwhile
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	
	</div>
	<!-- end actualités -->
		<?php do_action( 'foundationpress_after_content' ); ?>

		</div>
		</div>
		
		<div class="small-12 large-4 columns" data-equalizer-watch>
	<!-- encarts en image (provisoires) -->
	<div class="row">
	<div class="columns small-12 large-12">
<?php do_action( 'foundationpress_before_sidebar' ); ?>
			<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			<?php do_action( 'foundationpress_after_sidebar' ); ?>
	</div><div class="columns  small-12  show-for-large-up">
		<?php get_template_part("parts/random-image"); ?>
	</div>
			</div>
		
	</div>
		
	</div>
	
	<div class="row" data-equalizer>
		<div class="small-12 large-8 columns" data-equalizer-watch>
		<div class="small-12 columns show-for-large-up">
						<img src="<?php bloginfo('template_url') ?>/img/fake_encarts_05.jpg">
		</div>
		<div class="small-12 columns" role="main">
<!--			<img src="<?php bloginfo('template_url') ?>/img/fake_encarts_08.jpg">-->
			<?php do_action( 'foundationpress_before_sidebar' ); ?>
			<?php dynamic_sidebar( 'sidebar-home-bottom' ); ?>
			<?php do_action( 'foundationpress_after_sidebar' ); ?>
		</div>
	</div>
			
	<div class="columns small-12 large-4 columns" data-equalizer-watch>
			<!-- right home bottom sidebar -->
			<?php do_action( 'foundationpress_before_sidebar' ); ?>
			<?php dynamic_sidebar( 'sidebar-home-widgets-2' ); ?>
			<?php do_action( 'foundationpress_after_sidebar' ); ?>
	</div>
	</div>
	
	

<!-- /contenu -->
<?php get_footer(); ?>
