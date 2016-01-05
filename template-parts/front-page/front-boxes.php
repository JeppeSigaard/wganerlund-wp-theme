<?php 
$boxes = get_post_meta(get_the_ID(),'field',true);
if($boxes && is_array($boxes)) : ?>
<div class="front-boxes max-1000">
    <?php foreach($boxes as $box): ?>
    <div class="front-box">
        <div class="box-icon"></div>
        <h3 class="box-header"><?php echo wp_strip_all_tags($box['field_heading']); ?></h3>
        <p><?php echo wp_strip_all_tags($box['field_text']); ?></p>    
    </div>
    <?php endforeach;?> 
</div>
<?php endif;