<div class="last-activities">
  <div class="container">
    <div class="last-activities__content">
      <?php if (have_rows('activities')) {
        while (have_rows('activities')) {
          the_row(); ?>
          <div class="last-activities__content__item" data-aos="fade-up">
            <a class="fulllink" href="<?php the_sub_field('link'); ?>"></a>
            <div class="last-activities__content__item__image">
              <?php
              $image = get_sub_field('image');
              if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </div>
            <div class="last-activities__content__item__text">
              <h3><?php the_sub_field('title'); ?></h3>
            </div>

          </div>
      <?php }
      } ?>
    </div>
    <div class="last-activities__title">
      <p><?php the_sub_field('text'); ?></p>
      <h2><?php the_sub_field('title'); ?></h2>
    </div>
  </div>
</div>