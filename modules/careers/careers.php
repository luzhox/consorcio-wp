<style>
  .header-background{
    max-height:400px;
  }
</style>

<div class="careers">
  <div class="container">
    <div class="careers__menu">
      <?php if (have_rows('careers')) {while (have_rows('careers')) {the_row(); ?>
        <button class="careers__menu__item <?php if (get_sub_field('isActive')) {echo 'active';}?>" data-id="<?php the_sub_field('id')?>"><?php the_sub_field('btnText')?></button>
      <?php }} ?>
    </div>
    <div class="careers__content">
      <?php if (have_rows('careers')) {while (have_rows('careers')) {the_row(); ?>
        <div id="<?php the_sub_field('id')?>" class="careers__content__item <?php if (get_sub_field('isActive')) {echo 'active';}?>">
        <?php if (have_rows('subarea')) {while (have_rows('subarea')) {the_row(); ?>
          <div class="careers__content__item__box">
            <div class="careers__content__item__box__head">
              <h3><?php the_sub_field('subarea')?></h3>
               <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5321 0.557067C17.1698 1.28396 17.1536 2.44462 16.496 3.14949L9.65458 10.4828C9.01126 11.1724 7.98874 11.1724 7.34542 10.4828L0.503954 3.14949C-0.153631 2.44462 -0.169785 1.28396 0.467875 0.557067C1.10553 -0.169822 2.15554 -0.187679 2.81312 0.517184L8.5 6.61292L14.1869 0.517184C14.8445 -0.187679 15.8945 -0.169823 16.5321 0.557067Z" fill="#3B2723"/>
                </svg>
            </div>
            <div class="careers__content__item__box__content">
                <?php if (have_rows('careersdis')) {while (have_rows('careersdis')) {the_row(); ?>
                  <div class="careers__career">
                    <h4><?php the_sub_field('carrera')?></h4>
                    <div class="buttons">
                      <?php if (have_rows('buttons')) {while (have_rows('buttons')) {the_row(); ?>
                          <?php
                              $link = get_sub_field('linking');
                              if( $link ):
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self';
                                  ?>
                                  <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                              <?php endif; ?>
                      <?php }} ?>
                    </div>
                  </div>

                <?php }} ?>
            </div>
          </div>
          <?php }} ?>
        </div>
      <?php }} ?>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const menuItems = document.querySelectorAll('.careers__menu__item');
  const contentItems = document.querySelectorAll('.careers__content__item');
  const dropdwon = document.querySelector('.careers__content__item__box');
  $('.careers__content__item__box').click(function(e) {
    $(this).toggleClass('active');
    $(this).siblings().removeClass('active');

  });



  menuItems.forEach(item => {
    item.addEventListener('click', function() {
      const id = this.getAttribute('data-id');

      // Remove active class from all menu items
      menuItems.forEach(i => i.classList.remove('active'));
      // Add active class to the clicked item
      this.classList.add('active');

      // Hide all content items
      contentItems.forEach(content => content.classList.remove('active'));
      // Show the corresponding content item
      document.getElementById(id).classList.add('active');
    });
  });
});
</script>