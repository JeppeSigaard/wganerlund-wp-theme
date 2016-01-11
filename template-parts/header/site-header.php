<header id="site-header" class="site-header" role="directory">
	<div class="inner">
		<a href="<?php bloginfo('url'); ?>" class="site-header-logo">
            <span>Wagnerlund</span>
            <span>Kloakservice A/S</span>
        </a>
        <?php get_template_part('template-parts/side/main','menu'); ?>
        <a class="hamburger" href="#" nofollow tabindex="0">
            <?php include get_template_directory().'/statics/icons/menu.svg'; ?>
            <?php include get_template_directory().'/statics/icons/close.svg'; ?>
        </a>
	</div>
</header>
