<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'letterbox'); ?>
<li <?php post_class('list-item') ?>>
	<a class="inner" href="<?php the_permalink(); ?>">
		<header class="list-item-header">
			<div class="list-item-img" style="background-image:url(<?php echo $image_url[0]; ?>);">
			    <div class="list-item-meta">
				    <span class="list-item-date square-icon">
				        <span>
				            <?php the_modified_date('d'); ?>
				        </span>
				        <span>
				            <?php the_modified_date('M'); ?>
				        </span>
					    
				    </span>
				    <span class="square-icon icon-next" href="<?php bloginfo('url') ?>/nyheder/"><?php include get_template_directory() . '/statics/icons/chevron-right.svg'; ?></span>
			    </div>
            </div>
		</header>
		<section class="list-item-excerpt">
			<?php the_title('<h3>','</h3>'); ?>
			<?php the_excerpt(); ?>
		</section>
	</a>
</li>
