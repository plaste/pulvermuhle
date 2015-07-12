<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div id="preheader-bar" class="row">
<div id="logo">Pulvermühle</div>
	<div id="search">
	<?php get_template_part('searchform'); ?>
	</div>
	<div id="header-langues">
	<?php languages_list_header(); ?>
	</div>
</div>
<div class="top-bar-container contain-to-grid show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>