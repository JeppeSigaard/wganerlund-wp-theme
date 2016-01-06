<?php 
$news = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => '2',
));

if($news->have_posts()): ?> 
<section class="featured-posts">
    <div class="inner max-1000">
        <header class="featured-header">
            <h3>Seneste nyt fra <span>Wagnerlund Kloakservice</span></h3>
            <a class="square-icon icon-next" href="<?php bloginfo('url') ?>/nyheder/"><?php include get_template_directory() . '/statics/icons/chevron-right.svg'; ?></a>
        </header>
        <ul class="featured-list item-list">
            <?php   
            while ($news->have_posts()) : $news->the_post(); 
                get_template_part('template-parts/common/list','item');
            endwhile; wp_reset_postdata(); 
            ?>
        </ul>
    </div>
</section>
<?php endif; ?>