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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
	<header class="small-12 medium-6 columns">
		<h1><?php the_title(); ?></h1>
		<?php
				$varietes=types_render_field("varietes", array("raw" => "true"));
				if (strlen($varietes)>2) echo '
				<div class="varietes row small-12">
				'.$varietes.'
				</div>
				'; 
		?>
		<div class="informations row">
			<div class="info small-12">
				<?php echo '<span class="title">Latin&nbsp;:</span> '.types_render_field("nom-latin", array("raw" => "true")); ?>
				</div>
			<?php 
				$famille=types_render_field("famille", array("raw" => "true"));
				if (strlen($famille)>2) echo '<div class="info small-12"><span class="title">Famille&nbsp;:</span> '.$famille.'</div>';
			?>
			<div class="info small-12">
			<span class="title">Mise en vente :</span> <?php echo types_render_field("debut-production", array("raw" => "true")); ?> > <?php echo types_render_field("fin-production", array("raw" => "true")); ?></span>
			</div>
		</div>
	
		<div class="calendrier small-12 show-for-medium-up">
		<?php
		$mois=array("J","F","M","A","M","J","J","A","S","O","N","D");
		$mois_selection_get = types_render_field("mois-production", array("separator"=>", ","html" => "true"));
		$mois_selection=explode(",",$mois_selection_get);
		$mois_actuel=1;
		$mois_today=date('n');
		foreach($mois as $value) {
			
			if (in_array($mois_actuel,$mois_selection)) $addclass="active";
			else $addclass="";
			echo '<div class="mois small-2 medium-1 columns nolr-padding"><div class="coche  '.$addclass.'"></div>';
			if ($mois_today==$mois_actuel) echo '<b>';
			echo $value;
			if ($mois_today==$mois_actuel) echo '</b>';
			echo '</div>';
			
			$mois_actuel++;
		}
		?>
	
		<div class="clearer"></div>
		</div>
	</header>
	
	<div class="thumb-single small-12 medium-6 columns">
		<?php
		
//		  echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">';
		?>
			
			<?php
		if ( has_post_thumbnail() ) {
			$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$content = '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_post_thumbnail( $post_id, 'large' ) . '</a>';
			if ( function_exists('slb_activate') ) {
				$content = slb_activate($content);
				}
			echo $content;
		}
?>
		
		<?php  ?>

		<?php
		
			 
		?>
			
	</div>
	</div>
	
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<div class="entry-content">
			
			<?php 
			// $content=get_the_content();
			// echo "<p>".tronk($content, 120, "...")."</p>"; 
			?>
			
		</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>