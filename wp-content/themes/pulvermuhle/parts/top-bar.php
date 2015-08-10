<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="full-width preheader-container show-for-large-up">
	<div id="preheader-bar" class="row">
		<div id="logo">
			<h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/pulvermuhle-head-logo.png" width="210" alt="<?php bloginfo( 'name' ); ?>, <?php bloginfo( 'description' ); ?>"></a></h1>
		</div>
	<!--
		<div id="search">
		<?php get_template_part('searchform'); ?>
		</div>
	-->
		<div id="header-langues">
		<?php languages_list_header(); ?>
		</div>
		<div id="newsletter-form">
		<div class="title">Inscrivez-vous à la newsletter</div>
		<?php get_template_part('parts/form', 'newsletter'); ?>
		</div>
		
	</div>
</div>
<div class="top-bar-container contain-to-grid show-for-large-up">
    <nav class="top-bar" data-topbar role="navigation">
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>