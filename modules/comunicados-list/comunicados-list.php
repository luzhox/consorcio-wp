<style>
  .header-background{
    max-height: 380px;
  }
</style>
<div class="comunicados-list">
  <div class="container">
    <div class="comunicados-list__content">
         <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'posts_per_page' => -1,
          'post_type'=> 'comunicados',
          'post_status'=> 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'paged' => $paged, // Añadir soporte para paginación
        );
        $family = new WP_Query($args);
      ?>
            <?php while ($family->have_posts()): $family->the_post(); ?>
        <div class="comunicados-list__content__item" data-aos="fade-up">
          <div class="comunicados-list__content__item__info">
            <h3><?php the_title(); ?></h3>
            <a href="<?php the_permalink(); ?>" class="btn__primary">Ver comunicado</a>
          </div>
      </div>

                  <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
</div>