<section class="feature">
    <?php $i = 0; while ( have_posts() ) : the_post(); $i++; if ($i < 5) : ?>
        <?php get_template_part('template-parts/common/featured','article'); ?>
    <?php endif; endwhile;  ?>
</section>
<?php get_template_part('template-parts/common/section','newsletter'); ?>
