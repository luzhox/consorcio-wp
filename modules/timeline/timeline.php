<div class="timeline" data-aos="fade-in">
  <div class="container">
    <div class="timeline__title"><?php the_sub_field('title') ?></div>
    <div id="timeLineMovic" class="timeline__content owl-carousel owl-theme">
    <?php if (have_rows('timeline')) {
                  while (have_rows('timeline')) {
                      the_row(); ?>
      <div class="timeline__content__item">
        <div class="timeline__content__item__date"><?php the_sub_field('age') ?></div>
        <div class="timeline__content__item__text"><?php the_sub_field('content') ?></div>
      </div>
      <?php }} ?>

    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    $('.timeline__content').on('changed.owl.carousel', function(event) {
      console.log(event.item.index)
      if(event.item.index===4){
        setTimeout(function(){
          $('#timeLineMovic').trigger('to.owl.carousel', 0)
        }, 8000)
      }
    })
  })
</script>