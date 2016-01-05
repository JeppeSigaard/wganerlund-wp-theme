<footer id='site-footer' class="site-footer">
    <section class="inner">
        <article class="site-footer-info">
            <h3 class="footer-comp-name"><?php echo get_theme_mod('info_name'); ?></h3>
            <p><?php echo get_theme_mod('info_address'); ?><br />
            <?php echo get_theme_mod('info_post'); ?> <?php echo get_theme_mod('info_city'); ?>
            </p>
            <p>
            Telefon: <a href="tel:<?php echo get_theme_mod('info_telefon'); ?>"><?php echo get_theme_mod('info_telefon'); ?></a><br />
            Email: <a href="mailto:<?php echo get_theme_mod('info_email'); ?>"><?php echo get_theme_mod('info_email'); ?></a>
            </p>
        </article>   
        <?php 
        wp_nav_menu( array(
            'theme_location'  => 'footer-menu',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'site-footer-nav',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => false,
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''

        ));
        ?>
    </section>
</footer>
