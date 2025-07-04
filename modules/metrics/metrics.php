<div class="metrics <?php the_sub_field('size')?>">
  <div class="container">
    <div class="metrics__content">
          <?php if (have_rows('metrics')) {while (have_rows('metrics')) {the_row(); ?>
            <div class="metrics__content__item">
              <h3><?php the_sub_field('prefix')?><span class="numberAnimation"><?php the_sub_field('number')?></span><?php the_sub_field('sufix')?></h3>
              <p><?php the_sub_field('text')?></p>
            </div>
          <?php }} ?>
    </div>
  </div>
</div>