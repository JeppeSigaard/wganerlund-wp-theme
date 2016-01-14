<?php 
$boxes = get_post_meta(get_the_ID(),'field',true);
if($boxes && is_array($boxes)) : ?>
<div class="front-boxes max-1000">
   <div class="inner">
        <?php foreach($boxes as $box): ?>
        <div class="front-box">
            <div class="inner">
            <?php if($box['field_link']) : ?>
            <a href="<?php echo get_the_permalink($box['field_link']); ?>" class="box-icon"><?php if (!empty($box['field_icon'])) {include get_attached_file($box['field_icon']);} ?></a>
            <?php else :  ?>
            <div class="box-icon"><?php if (!empty($box['field_icon'])) {include get_attached_file($box['field_icon']);} ?></div>
            <?php endif; ?>
            <h3 class="box-header"><?php echo wp_strip_all_tags($box['field_heading']); ?></h3>
            <p><?php echo wp_strip_all_tags($box['field_text']); ?></p>
            </div>   
        </div>
        <?php endforeach;?>
    </div> 
</div>
<?php endif;