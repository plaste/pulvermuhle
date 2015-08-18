<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	

<header class="page-header-padding recettes-header">
	<h1 class="entry-title"><?php the_title(); ?></h1>
</header>

<!-- ingrédients -->
<div class="row white">
	<div class="small-12 medium-6 columns">
	
	<?php
	if ( has_post_thumbnail() ) {
		$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		$content = '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_post_thumbnail( $post_id, 'single-thumbs' ) . '</a>';
		if ( function_exists('slb_activate') ) {
			$content = slb_activate($content);
		}
		echo $content;
	}
?>

	</div>
		
	<div class="small-12 medium-6 columns ingredients">
		<?php
		$ingredients=types_render_field("ingredients", array("normal" => "true"));
		if (strlen($ingredients)>3) :
		?>
		
		<div class="block_titre">Ingédients phares</div>
		<div class="block_related">
<?php global $related; echo $related->show( get_the_ID() ); ?>
		</div>
		<div class="separator"></div>
		<div class="container_ingredients">
			<?php echo $ingredients; ?>
		</div>
	</div>
	
	<?php
		endif;
	?>
</div>
	
<!-- informations -->
<div class="row white informations">
	<div class="small-12 medium-6 columns info-item">
	<span class="picto difficulte"></span>&nbsp;<span class="titre">Difficulté : </span><span class="information"><?php echo types_render_field("difficulte", array("raw" => "true")); ?></span>
	</div>
	<div class="small-12 medium-6 columns info-item">
	<span class="picto temps"></span>&nbsp;<span class="titre">Temps de préparation : </span><span class="information"><?php echo types_render_field("temps-de-preparation", array("raw" => "true")); ?></span>
	</div>
	<div class="small-12 medium-6 columns info-item">
	<span class="picto portions"></span>&nbsp;<span class="titre">Portions : </span><span class="information"><?php echo types_render_field("portions", array("raw" => "true")); ?></span>
	</div>
	<div class="small-12 medium-6 columns info-item">
	<span class="picto cuisson"></span>&nbsp;<span class="titre">temps de cuisson : </span><span class="information"><?php echo types_render_field("temps-de-cuisson", array("raw" => "true")); ?></span>
	</div>
</div>
<!-- /informations -->
	
<!-- préparation -->
<div class="row white preparation">
<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<h3 class="dark">Préparation</h3>
				<?php the_content(); ?>
			</div>
	</div>
<!-- /préparation -->
	
	
<!--
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
-->
	
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>


