<div class="gallery-full owl-carousel owl-theme">
<?php
$images = get_sub_field('gallery');
if( $images ): ?>
        <?php foreach( $images as $image ): ?>
            <div class="gallery-full__item">
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
            </div>
        <?php endforeach; ?>
<?php endif; ?>
</div>