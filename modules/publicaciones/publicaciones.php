<style>
  .header-background {
    max-height: 440px;
    height: 100vh;
    position: relative;
}
</style>

<div class="publicaciones">
  <div class="container">
    <div class="publicaciones__content">
        <?php
        $args = array(
          'posts_per_page' => -1,
          'post_type'      => 'publicaciones-wp',
          'orderby'        => 'date',
          'order'          => 'DESC'
        );
        $family = new WP_Query($args);
      ?>
      <?php while ($family->have_posts()): $family->the_post(); ?>
        <div class="publicaciones__content__item">
          <button data-title="<?php the_title()?>" data-date="<?php echo the_date() ?>" data-count="<?php the_field('countpages')?>" data-poster="<?php the_field('poster')?>" data-content='<?php the_field('text')?>' data-link="<?php the_field('link')?>"  class="fullinteraction"></button>
          <div class="publicaciones__content__item__image">
            <?php
              $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
              if (!empty($image)):
            ?>
              <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
            <?php else: ?>
            <?php endif; ?>
          </div>
          <div class="publicaciones__content__item__info">
            <h3><?php the_title(); ?></h3>
          </div>

        </div>
      <?php endwhile; wp_reset_postdata(); ?>

    </div>

  </div>
</div>

<div class="modal modal-publications">
  <div class="overlay"></div>
  <div class="modal-container">
    <div class="close"></div>
    <div class="modal-content">
      <div class="modal-content__img">
        <img src="" alt="">
      </div>
      <div class="modal-content__content"></div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.fullinteraction');
    const modal = document.querySelector('.modal-publications');
    const modalContent = modal.querySelector('.modal-content__content');
    const modalImage = modal.querySelector('.modal-content__img img');
    const closeButton = modal.querySelector('.close');
    closeButton.addEventListener('click', function() {
      modal.classList.remove('active');
    });
    buttons.forEach(button => {
      button.addEventListener('click', function() {
        const count = this.getAttribute('data-count');
        const poster = this.getAttribute('data-poster');
        const content = this.getAttribute('data-content');
        const link = this.getAttribute('data-link');
        const date = this.getAttribute('data-date');
        const title = this.getAttribute('data-title');
        modalImage.src = poster;
        modalContent.innerHTML = `
        <h4><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.74182 0C1.6199 0 1.51539 0.0174182 1.41088 0.0522547C0.731566 0.191601 0.191601 0.731566 0.0522547 1.41088C0 1.51539 0 1.6199 0 1.74182V11.3218C0 12.7676 1.16702 13.9346 2.61273 13.9346H12.1928V12.1928H2.61273C2.12502 12.1928 1.74182 11.8096 1.74182 11.3218C1.74182 10.8341 2.12502 10.4509 2.61273 10.4509H12.1928V0.870911C12.1928 0.383201 11.8096 0 11.3218 0H10.4509V5.22547L8.70911 3.48365L6.96729 5.22547V0H1.74182Z" fill="#483127"/>
</svg>
<strong>${count} Páginas | Publicado el:</strong> ${date}</h4>
        <h3>${title}</h3>
        <div>${content}
        <div class="buttons">
          <a href="${link}" class="btn btn__primary" target="_blank" download>Descargar PDF</a>
          <a href="${link}" class="btn btn__primary--border" target="_blank">Ver en línea</a>
        </div>
        `;

        modal.classList.add('active');
      });
    });

    modal.querySelector('.overlay').addEventListener('click', function() {
      modal.classList.remove('active');
    });
  });
</script>