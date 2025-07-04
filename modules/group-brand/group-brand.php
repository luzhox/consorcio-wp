<section class="group-brand" data-aos="fade-up">
  <div class="container">
    <div class="group-brand__text">
      <?php the_sub_field('text'); ?>
    </div>
    <div class="group-brand__brands">
      <?php if ($images = get_sub_field('gallery')): ?>
        <?php foreach ($images as $image): ?>
            <a href="<?= esc_url($image['caption']); ?>">
              <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
            </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
