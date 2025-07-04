<div class="inscription-guide" data-aos="fade-up">
  <div class="container">
    <div class="inscription-guide__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="inscription-guide__menu">
      <?php if (have_rows('menu')) {
        while (have_rows('menu')) {
          the_row(); ?>
          <div class="inscription-guide__menu__item  <?php
            if (get_sub_field('isActive')) {
              echo 'active';
            }
            ?>" data-aos="fade-up">
            <button class="inscription-guide__menu__item__button" data-id="<?php the_sub_field('id'); ?>">
              <?php the_sub_field('textbtn'); ?>
            </button>
          </div>
        <?php }
      } ?>
    </div>
    <div class="inscription-guide__content">
      <div class="inscription-guide__content__section active" id="whyus">
        <div class="line-stepper"></div>
        <div class="inscription-guide__content__stepper">
          <?php if (have_rows('stepper')) {while (have_rows('stepper')) {the_row(); ?>
            <div class="inscription-guide__content__stepper__item">
              <div class="step"><?php the_sub_field('number')?></div>
              <h3><?php the_sub_field('title')?></h3>
              <?php the_sub_field('text')?>
            </div>
          <?php }} ?>
        </div>
        <div class="inscription-guide__content__stepper__message">
          <?php the_sub_field('message')?>
        </div>
      </div>
      <div class="inscription-guide__content__section " id="courses">
        <div class="content">
        <?php if (have_rows('courseuniversity')) {while (have_rows('courseuniversity')) {the_row(); ?>
          <div class="inscription-guide__content__course">
            <div class="inscription-guide__content__course__image">
              <?php $image = get_sub_field('brand');
              if ($image) { ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php } ?>
            </div>
            <div class="inscription-guide__content__course__buttons">
                  <?php $link = get_sub_field('link');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php $link2 = get_sub_field('linksumill');
                    if( $link2 ):
                        $link2_url = $link2['url'];
                        $link2_title = $link2['title'];
                        $link2_target = $link2['target'] ? $link2['target'] : '_self';
                        ?>
                        <a class="btn__primary--border" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
                    <?php endif; ?>

            </div>
          </div>
        <?php }} ?>
        </div>
      </div>
      <div class="inscription-guide__content__section " id="preinscription">
        <div class="content">
        <?php if (have_rows('preinscripuniversity')) {while (have_rows('preinscripuniversity')) {the_row(); ?>
            <div class="inscription-guide__content__course">
                <div class="inscription-guide__content__course__image">
                  <?php $image = get_sub_field('brand');
                  if ($image) { ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  <?php } ?>
                </div>
                <div class="inscription-guide__content__course__text">
                <?php the_sub_field('text')?>
                </div>
                <div class="inscription-guide__content__course__buttons2">
                  <?php $link3 = get_sub_field('link');
                    if( $link3 ):
                        $link3_url = $link3['url'];
                        $link3_title = $link3['title'];
                        $link3_target = $link3['target'] ? $link3['target'] : '_self';
                        ?>
                        <a class="btn__primary" href="<?php echo esc_url( $link3_url ); ?>" target="<?php echo esc_attr( $link3_target ); ?>"><?php echo esc_html( $link3_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php }} ?>
        </div>

      </div>

      <div class="inscription-guide__content__section " id="answerques">
        <div class="inscription-guide__content__answers">
                  <?php if (have_rows('questions')) {while (have_rows('questions')) {the_row(); ?>
                  <div class="inscription-guide__content__answers__item">
                    <div class="header">
                      <h3><?php the_sub_field('question')?></h3>
                      <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5321 0.557067C17.1698 1.28396 17.1536 2.44462 16.496 3.14949L9.65458 10.4828C9.01126 11.1724 7.98874 11.1724 7.34542 10.4828L0.503954 3.14949C-0.153631 2.44462 -0.169785 1.28396 0.467875 0.557067C1.10553 -0.169822 2.15554 -0.187679 2.81312 0.517184L8.5 6.61292L14.1869 0.517184C14.8445 -0.187679 15.8945 -0.169823 16.5321 0.557067Z" fill="#3B2723"/>
</svg>

                    </div>
                    <div class="response">
                      <?php the_sub_field('answer')?>
                    </div>

                  </div>
                    <?php }}?>
        </div>

      </div>
      <div class="inscription-guide__content__section" id="contact">
        <div class="content">
        <?php if (have_rows('contactUniversity')) {while (have_rows('contactUniversity')) {the_row(); ?>
         <div class="inscription-guide__content__course">
                <div class="inscription-guide__content__course__image">
                  <?php $image = get_sub_field('brand');
                  if ($image) { ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  <?php } ?>
                </div>
                <div class="inscription-guide__content__course__text">
                <?php the_sub_field('text')?>
                </div>
             </div>
          <?php }} ?>
          </div>
      </div>

    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {

    // Add click event listener to each button
    const answers = document.querySelectorAll('.inscription-guide__content__answers__item');

    const buttons = document.querySelectorAll('.inscription-guide__menu__item');
    const content = document.querySelectorAll('.inscription-guide__content__section');
    answers.forEach(answer => {
      answer.addEventListener('click', function (e) {
        // Toggle the active class on the clicked answer
        const response = e.currentTarget.querySelector('.response');
        answer.classList.toggle('active');
        // Close other answers
        answers.forEach(otherAnswer => {
          if (otherAnswer !== answer) {
            otherAnswer.classList.remove('active');
          }
        });
      });
    });
    buttons.forEach(button => {
      button.addEventListener('click', function (e) {
        const id = e.target.dataset.id;


        content.forEach(section => {
          if (section.id === id) {
            section.classList.add('active');
          } else {
            section.classList.remove('active');
          }
        });

        // Remove active class from the clicked button

        button.classList.add('active');
        // Remove active class from other buttons
        buttons.forEach(btn => {
          if (btn !== button) {
            btn.classList.remove('active');
          }
        });
        // Fetch content from the server
    });

  })
  });
</script>