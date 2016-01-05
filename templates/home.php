<?php get_template_part('template-parts/front-page/slideshow'); ?>
<section class="content-section">
    <article class="main-article max-1000">
       <div class="inner read-width">
            <?php while (have_posts()) : the_post(); ?>
            <h1 class="page-header"><?php the_title(); ?></h1>
            <?php the_content();?>
            <?php endwhile; ?>
       </div>
    </article>
    <?php get_template_part('template-parts/front-page/front','boxes'); ?> 
</section>
<?php get_template_part('template-parts/front-page/front','form'); ?> 
<?php get_template_part('template-parts/front-page/front','featured'); ?> 
