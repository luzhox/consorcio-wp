<div class="people-group" data-aos="fade-up">
  <div class="container">
    <div class="people-group__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="people-group__content">
      <?php if (have_rows('list')): ?>
          <?php while (have_rows('list')): the_row(); ?>
            <div class="people-group__content__item <?php if(!get_sub_field('img')):?>onlytext<?php endif; ?>">
              <div class="people-group__content__item__image">
                <?php
                $image = get_sub_field('img');
                if (!empty($image)): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              </div>
              <div class="people-group__content__item__info">
                <h4><?php the_sub_field('university')?></h4>
                <h3><?php the_sub_field('name')?></h3>
                <p><?php the_sub_field('position')?></p>
                <?php if ($content = get_sub_field('content')): ?>
                  <div class="people-group__content__item__info__text">
                    <?php the_sub_field($content); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>