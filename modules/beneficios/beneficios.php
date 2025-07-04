<div class="beneficios" data-aos="fade-in">
  <div class="container">
    <div class="beneficios__title">
      <h2><?php the_sub_field('title'); ?></h2>
    </div>
    <div class="beneficios__content">
      <?php if (have_rows('benefits')): ?>
        <?php while (have_rows('benefits')): the_row(); ?>
          <div class="beneficios__content__item">
            <div class="beneficios__content__item__image">
              <?php
              $image = get_sub_field('image');
              if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </div>
            <div class="beneficios__content__item__text">
              <p><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>