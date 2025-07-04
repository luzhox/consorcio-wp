<div class="events-list">
  <div class="container">
    <div class="events-list__content">
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'posts_per_page' => -1,
          'category_name' => 'Eventos realizados',
          'post_type'=> 'post',
          'post_status'=> 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'paged' => $paged, // Añadir soporte para paginación
        );
        $family = new WP_Query($args);
      ?>
      <?php while ($family->have_posts()): $family->the_post(); ?>

        <div class="events-list__content__item" data-aos="fade-up">
          <a href="<?php the_permalink(); ?>" class="linkfull"></a>
          <div class="events-list__content__item__image">
            <?php
            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!empty($image)): ?>
              <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
            <?php else: ?>
              <img src="https://dummyimage.com/600x400/eae9f5/eae9f5" alt="<?php echo esc_attr(get_the_title()); ?>" />
            <?php endif;
            ?>
          </div>
          <div class="events-list__content__item__info">
            <h3><?php the_title(); ?></h3>
          </div>
          <div class="events-list__content__item__info__hover">
            <div class="imghover">
              <?php
              $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
              if (!empty($image)): ?>
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
              <?php endif;
              ?>
            </div>
            <div class="text">
              <div class="content">
                 <h5><?php the_date()?></h5>
                <h3><?php the_title(); ?></h3>
                <a href="<?php the_permalink(); ?>" class="btn btn__primary">Leer más</a>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; wp_reset_postdata(); ?>

      <div class="pagination" style="width: 100%; text-align: center; margin-top: 20px;">
        <?php
        echo paginate_links(array(
          'total' => $family->max_num_pages, // Número total de páginas
          'current' => $paged, // Página actual
          'prev_text' => __('« Anterior'), // Texto para el enlace anterior
          'next_text' => __('Siguiente »'), // Texto para el enlace siguiente
        ));
        ?>
      </div>
    </div>
  </div>
</div>