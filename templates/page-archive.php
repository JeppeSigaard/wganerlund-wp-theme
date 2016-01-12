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
            <h3>Seneste nyt <span>fra</span> <span>Wagnerlund Kloakservice</span></h3>
        </header>
        <ul class="archive-list item-list">
            <?php
            $i = 0; while ($news->have_posts()) : $news->the_post(); $i++;
                if ($i == 3) : ?>
                <a class="news-more" href="#">Se tidligere nyheder</a>
                <div class="news-hidden">
                <?php endif;  get_template_part('template-parts/common/list','item'); 
            endwhile; wp_reset_postdata(); 
            ?>
            <?php if ($i >= 3) : ?>
            </div>
            <?php endif; ?>
        </ul>
</section>
<?php endif;

// 	End wrapper
get_template_part('template-parts/common/content','after');

//	K thanks bye :-)
get_footer();
