<?php 

/*
Template name: Nyhedsarkiv 
Description: Viser oversigt over nyheder
*/

get_header();

// 	Start wrapper
get_template_part('template-parts/common/content','before');

$news = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => get_option('posts_per_page'),
));

if($news->have_posts()): ?>
<section class="posts-archive">
        <header class="archive-header">
            <h3>Seneste nyt fra <span>Wagnerlund Kloakservice</span></h3>
        </header>
        <ul class="archive-list item-list">
            <?php
            while ($news->have_posts()) : $news->the_post();
                get_template_part('template-parts/common/list','item');
            endwhile; wp_reset_postdata();
            ?>
        </ul>
</section>
<?php endif;

// 	End wrapper
get_template_part('template-parts/common/content','after');

//	K thanks bye :-)
get_footer();
