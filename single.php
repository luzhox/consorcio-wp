<?php get_header(); ?>

<?php include('menu.php')?>
<style>
  @media only screen and (min-width:1200px) {
    .site-header-nav .main-navegation ul li a,.site-header-nav .main-navegation ul li a:hover{
      color:#36180A;
    }
    .site-header-nav .main-navegation ul li.current_page_item a{
      color:#36180A;
    }
    .site-header-nav .main-navegation ul li a::before,.site-header-nav .main-navegation ul li.current_page_item a::before{
      background-color:#36180A;
    }
     ul li.menu-item-has-children > a::after {

                            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='13' height='14' viewBox='0 0 13 14' fill='none'%3E%3Cpath d='M0.870225 3.23024L6.49954 9.02628L12.1286 3.2307L13 4.07717L6.49954 10.7698L0 4.07717L0.870225 3.23024Z' fill='%23483127'/%3E%3C/svg%3E") !important;

            }
  }
</style>
<div class="menu-white"></div>
	<div id="articulo" class="single" >
		<?php while(have_posts() ): the_post(); ?>
			<?php global $post;
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );?>

			<div class="container">
				<div class="single__title">
					<div class="single__cat">
					<?php $terms = get_the_terms( $post->ID , 'category');
                                  if($terms) {
                                    foreach( $terms as $term ) {
                                      $cat_obj = get_term($term->term_id, 'category');
                                      $cat_slug = $cat_obj->name;
                                    }
                                  }
                            echo $cat_slug;?>
					</div>
				<h1 data-aos="fade-up" data-aos-offset="100"><?php the_title();?></h1>
				<p class="date"><?php the_date()?></p>
				</div>
				<div class="galeriaBlog owl-carousel owl-theme ">
				<?php
					$images = get_field('slider');
					if( $images ): ?>
        <?php foreach( $images as $image ): ?>
					<div class="galeriaBlog__item">
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
								</div>
        <?php endforeach; ?>

				<?php endif; ?>
				<?php
					$images = get_field('slider');
					if( !$images ): ?>
						<div class="galeriaBlog__item">
						<?php the_post_thumbnail();?>
								</div>
					<?php endif; ?>
				</div>
				<div class="post">
					<div class="textos">

						<div class="texto-articulo" data-aos="fade-up" data-aos-offset="100"><?php the_content();?></div>
					</div>
				</div>

			</div>
	</div>

	<div class="white-menu"></div>
	<?php endwhile; ?>
	<script>
  jQuery(document).ready(function($) {
    $('#masthead').addClass('menu-white');
    $('.site-header-nav .main-navegation ul li a').css('color','#383A3F');
    $('#brand').attr('src',$('#brand').data('brandtwo'));
  });
</script>
<?php get_footer(); ?>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#brand').attr('src', $('#brand').data('brandtwo'))
				$('#brand').attr('data-brand', $('#brand').data('brandtwo'))

        $('.site-header').addClass('whiteVer');
    })
</script>


<script>
  $('#brand').addClass('brand--white');
        $('#brand').attr('src', $('#brand').data('brandtwo'))
</script>