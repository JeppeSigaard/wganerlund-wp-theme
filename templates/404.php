<?php 
$suggest = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
)); 
?>
<section class="error-404">
    <article class="error-404-article read-width">
        <h1>Well, Shucks...</h1>
        <p>Jeg har ikke noget til dig her.</p>
        <p><a href="<?php bloginfo('url') ?>">Klik her</a> for at vende tilbage til forsiden</p>

    </article>
</section>
<section class="feature">
<?php 
while ( $suggest->have_posts() ) {
    $suggest->the_post();
    
    get_template_part('template-parts/common/featured','article');
    
    wp_reset_postdata();
}
?>
</section>