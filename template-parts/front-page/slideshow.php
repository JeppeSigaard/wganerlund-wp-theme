<section class="front-slider">
    <div class="inner">
        <?php $i = 0; while($i < 4) : $i ++; ?>
        <div class="slide" data-bg="http://lorempixel.com/1280/<?php echo 600 + $i ?>">
            <div class="slider-cta">
                <span class="cta-icon"></span>
                <span class="cta-text">Døgnvagt for erhverv: 70 22 00 21</span>
                <a href="#" class="cta-link">Ring nu</a>
                <a href="#" class="prev"><?php include get_template_directory() . '/statics/icons/chevron-left.svg'; ?></a>
                <a href="#" class="next"><?php include get_template_directory() . '/statics/icons/chevron-right.svg'; ?></a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>