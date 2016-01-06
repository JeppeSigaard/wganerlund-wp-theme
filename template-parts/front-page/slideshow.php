<?php 
$slides = new WP_Query(array(
    'post_type' => 'slide',
    'posts_per_page' => 6,
    'orderby' => 'menu_order',
));

?>
<section class="front-slider">
    <div class="inner">
        <?php while ($slides->have_posts()) : $slides->the_post(); ?>
        <?php $bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' );?>
        <div class="slide" data-bg="<?php echo $bg_url[0] ?>">
            <div class="slider-cta">
                <span class="cta-icon"><?php include get_attached_file(get_post_meta(get_the_ID(),'slide_icon',true)); ?></span>
                <span class="cta-text"><?php echo get_post_meta(get_the_ID(),'slide_text',true) ?></span>
                <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'slide_link',true)); ?>" class="cta-link">
                    <?php echo get_post_meta(get_the_ID(),'slide_link_text',true) ?>
                </a>
                <a href="#" class="prev"><?php include get_template_directory() . '/statics/icons/chevron-left.svg'; ?></a>
                <a href="#" class="next"><?php include get_template_directory() . '/statics/icons/chevron-right.svg'; ?></a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>