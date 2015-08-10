<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
	
	
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
	
		<span class="thumb-single">
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
			
	</span>
	
	
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>


