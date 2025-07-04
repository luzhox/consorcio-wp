<div class="comission-group">
  <div class="container">
    <div class="comission-group__content">
      <?php
        $args = array(
          'posts_per_page' => -1,
          'post_type'      => 'comisiones-work',
          'orderby'        => 'date',
          'order'          => 'DESC'
        );
        $family = new WP_Query($args);
      ?>
      <?php while ($family->have_posts()): $family->the_post(); ?>
        <div class="comission-group__content__item" data-aos="fade-up">
          <a href="<?php the_permalink(); ?>" class="linkfull"></a>
          <div class="comission-group__content__item__image">
            <?php
              $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
              if (!empty($image)):
            ?>
              <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
            <?php else: ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
            <?php endif; ?>
          </div>
          <div class="comission-group__content__item__info">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
          </div>
          <div class="comission-group__content__item__info__hover">
            <div class="imghover">
              <?php
                $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if (!empty($image)):
              ?>
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
              <?php endif; ?>
            </div>
            <div class="text">
              <div class="content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn__primary">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</div>