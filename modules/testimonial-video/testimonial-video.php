<div class="testimonial-video">
  <div class="container">
    <div class="testimonial-video__text" data-aos="fade-right">
    <h3><?php the_sub_field('text')?></h3>
    </div>
    <div class="testimonial-video__content ">
    <div class="testimonial-video-slider owl-carousel owl-theme">
        <?php if (have_rows('testi')) {
              while (have_rows('testi')) {
                  the_row(); ?>
          <div class="testimonial-video__content__item" data-aos="fade-up">
            <div class="testimonial-video__content__item__img" style="background:url(<?php the_sub_field('img')?>)">
              <a href="<?php the_sub_field('video')?>"></a>
            </div>
            <div class="testimonial-video__content__item__text">
              <svg width="34" height="25" viewBox="0 0 34 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.3867 9.41558C11.3555 9.41558 12.5341 10.013 13.9227 11.2078C15.3435 12.3703 16.0539 14.0333 16.0539 16.1968C16.0539 18.3281 15.2628 20.2817 13.6805 22.0578C12.0982 23.8338 10.2091 24.7218 8.01328 24.7218C5.81745 24.7218 4.00911 24.0921 2.58828 22.8328C1.16745 21.5734 0.457031 19.5552 0.457031 16.7781C0.457031 14.001 1.73255 10.8203 4.28359 7.23589C6.86693 3.65151 9.82161 1.34266 13.1477 0.309326C14.2456 0.890576 14.843 1.7786 14.9398 2.97339C13.7451 3.90985 12.6956 5.07235 11.7914 6.46089C10.9195 7.81714 10.4513 8.80204 10.3867 9.41558ZM27.7273 9.41558C28.6961 9.41558 29.8747 10.013 31.2633 11.2078C32.6841 12.3703 33.3945 14.0333 33.3945 16.1968C33.3945 18.3281 32.6034 20.2817 31.0211 22.0578C29.4388 23.8338 27.5497 24.7218 25.3539 24.7218C23.1581 24.7218 21.3497 24.0921 19.9289 22.8328C18.5404 21.5734 17.8461 19.8458 17.8461 17.65C17.8461 15.4541 18.4112 13.1614 19.5414 10.7718C20.7039 8.34995 22.2701 6.17027 24.2398 4.23277C26.2096 2.29527 28.3086 0.987451 30.5367 0.309326C31.6346 0.922868 32.232 1.81089 32.3289 2.97339C31.1018 3.90985 30.0362 5.07235 29.132 6.46089C28.2602 7.81714 27.7919 8.80204 27.7273 9.41558Z" fill="#FFFFFF"/>
              </svg>
              <?php the_sub_field('text')?>
            </div>
          </div>
        <?php }} ?>
    </div>
    </div>
  </div>
</div>