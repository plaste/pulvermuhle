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
<article class="post-archive panel" id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-equalizer>
	<div class="row">
		<?php
		if ( has_post_thumbnail() ) {
		//Get the Thumbnail URL
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false, '' );
			$bg_produit_url = $src[0];
			
		} else {
			$bg_produit_url = get_template_directory_uri().'/img/actu-thumb-defaut.jpg';
			}
		?>
		
	<?php echo '<a href="' . get_the_permalink() . '" title="' . esc_attr( get_the_title() ) . '">'; ?>
	<div class="thumb-produits small-12 medium-3 columns" style="background:url(<?php echo $bg_produit_url; ?>) center center no-repeat;background-size: cover;" data-equalizer-watch>
		</div>
		
		<?php
			echo '</a>'; 
			 
		?>
	
	<div class="content-produits iso-block produits small-12 medium-9 columns" data-equalizer-watch>
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<span class="latin">
				<?php echo types_render_field("nom-latin", array("raw" => "true")); ?>
			<?php 
				$famille=types_render_field("famille", array("raw" => "true"));
				if (strlen($famille)>2) echo '&nbsp;/ '.$famille;
			?>
			</span>
		</h2>
		
			<?php 
				$varietes=types_render_field("varietes", array("raw" => "true"));
				if (strlen($varietes)>2) echo '
				<div class="varietes">
				'.$varietes.'</div>
				'; 
			?>
			<?php //echo $main_term ?>
		
			<?php //foundationpress_entry_meta(); ?>

		<div class="entry-content">
			
			<?php $content=get_the_content();
			echo "<p>".tronk($content, 120, "...")."</p>"; 
			?>
			<p class="dates"><b>Mise en vente :</b> <?php echo types_render_field("debut-production", array("raw" => "true")); ?> > <?php echo types_render_field("fin-production", array("raw" => "true")); ?></p>
		</div>
		
		<div class="calendrier row">
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
		</div>
		
		</div>

	
	</div>
	<div class="clearer"></div>


</article>
<!--</div>-->