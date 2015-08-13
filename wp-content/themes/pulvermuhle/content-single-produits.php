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
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="latin">
				<?php echo types_render_field("nom-latin", array("raw" => "true")); ?>
			<?php 
				$famille=types_render_field("famille", array("raw" => "true"));
				if (strlen($famille)>2) echo '&nbsp;/ '.$famille;
			?>
			</span></h2>
			<?php 
				$varietes=types_render_field("varietes", array("raw" => "true"));
				if (strlen($varietes)>2) echo '
				<div class="varietes">
				('.$varietes.')</div>
				'; 
			?>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
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
		foreach($mois as $value) {
			
			if (in_array($mois_actuel,$mois_selection)) $addclass="active";
			else $addclass="";
			echo '<div class="mois small-2 medium-1 columns nolr-padding"><div class="coche  '.$addclass.'"></div>'.$value.'</div>';
			
			$mois_actuel++;
		}
		?>
		</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>