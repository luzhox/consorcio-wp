<div class="header-video">
  <div class="header-video__content">
    <div class="header-video__content-video">
      <video src="<?php echo get_sub_field('video'); ?>" poster="<?php echo get_sub_field('poster'); ?>"  loop muted>
        <source src="<?php echo get_sub_field('video'); ?>" type="video/mp4">
      </video>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function($) {
    const videoObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const video = entry.target;
        if (entry.isIntersecting) {
          video.play();
        } else {
          video.pause();
        }
      });
    }, {
      threshold: 0.5 // El video comenzará a reproducirse cuando al menos el 50% esté visible
    });

    // Observar todos los videos en el banner
    $('.header-video__content-video video').each(function() {
      videoObserver.observe(this);
    });
  });
</script>