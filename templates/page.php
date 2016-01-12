<?php while (have_posts()) : the_post(); if (has_post_thumbnail()) : ?>
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'widescreen' ); ?>
<div class="page-image" style="background-image: url(<?php echo $image_url[0] ?>);" ></div>
<?php endif; ?>
<article <?php post_class(); ?>>
	<header class="page-header">
		<div class="page-title">
			<?php the_title('<h1>','</h1>'); ?>
			<?php if(get_post_meta(get_the_ID(),'subheader',true)) : ?>
				<h2 class="subheader"> <?php echo get_post_meta(get_the_ID(),'subheader',true) ?></h2>
			<?php endif; ?>
		</div>
	</header>
	<section class="page-content">
		<div class="inner read-width">
			<?php the_content(); ?>
		</div>
	</section>
</article>
<?php endwhile; ?>
<?php get_template_part('template-parts/common/page','after'); ?>