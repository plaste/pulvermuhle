<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_template_part( 'parts/404-header' ); ?>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<article class="page-404" <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h1>Aïe... désolé !</h1>
            <p>Nous ne cultivons pas la variété <br>de page que vous cherchez !</p>
            <img src="<?php bloginfo('template_url'); ?>/img/arrow-down.png">
            <img class="watering" src="<?php bloginfo('template_url'); ?>/img/arrosoir-404.png">
            <button class="btn-404"><a href="<?php echo home_url(); ?>">retour à l'accueil</a></button>
            <button class="btn-404-small"><a href="<?php echo home_url(); ?>">retour</a></button>
		</article>
	</div>
</div>
<?php get_footer(); ?>
