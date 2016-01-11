<?php 

/*
Template name: Side med kontaktformular 
Description: Viser en kontaktformular under sidens tekst
*/

get_header();

// 	Start wrapper
get_template_part('template-parts/common/content','before');

while (have_posts()) : the_post(); if (has_post_thumbnail()) : ?>
<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'widescreen' ); ?>
<div class="page-image" style="background-image: url(<?php echo $image_url ?>);" ></div>
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
		<div class="inner read-width ct-form">
		    <?php get_template_part('template-parts/common/ct-form'); ?>
		</div>
	</section>
</article>
<?php endwhile; ?>
<?php get_template_part('template-parts/common/content','after'); 

//	K thanks bye :-)
get_footer();
