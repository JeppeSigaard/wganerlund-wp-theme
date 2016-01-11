<nav id="site-nav" class="site-nav">
	
	<div class="inner">
	<?php 
        if( !is_home() && !is_front_page()) :
            dynamic_sidebar('default-sidebar'); 
            if (is_single()) { dynamic_sidebar('post-widgets'); }
            get_template_part('template-parts/side/tax-widget'); 
        endif;
        ?>
	</div>
</nav>
