<section class="other-presentations">
  <div class="container">
    <div class="other-presentations__title">
      <h3><?php echo get_sub_field('title'); ?></h3>
    </div>
    <div class="other-presentations__content">
    <?php if (have_rows('videos')) {
        while (have_rows('videos')) {
          the_row(); ?>
        <div class="other-presentations__content__item">
          <a href="<?php echo get_sub_field('isYoutube') ? 'https://www.youtube.com/embed/' . get_sub_field('codeEmbed') : get_sub_field('fileVideo'); ?>" class="other-presentations__content__item-youtube__link">
          </a>
          <div class="other-presentations__content__item__img">
            <?php $image= get_sub_field('poster'); ?>
            <?php if ($image) { ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php } ?>
          </div>
          <div class="other-presentations__content__item__text">
            <h3><?php echo get_sub_field('title'); ?></h3>
          </div>
        </div>
        <?php }
      } ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    jQuery('.other-presentations__content__item a').colorbox({
      rel: 'other-presentations',
      width: '80%',
      height: '80%',
      iframe: true,

    });
  });
</script>