<?php
/**
 * Template Name: HOME
 * Description: ホームページ
 */
 ?>
<?php get_header(); ?>

  <main role="main">
    <section id="swiper1">
      <div class="swiper-container swc1">
        <ul class="swiper-wrapper sww1">
          <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/swiper1.jpg" alt="Swiper01"></li>
          <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/swiper2.jpg" alt="Swiper02"></li>
          <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/swiper3.jpg" alt="Swiper03"></li>
          <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/swiper4.jpg" alt="Swiper04"></li>
        </ul>
        <div class="swiper-pagination swp1"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </section> <!--  swiper  -->

    <div id="newArrivals">
      <h2>New Arrivals</h2>
    </div>

    <div id="wrapper">
      <div id="filterBtn">
        <a href="javascript:void(0);" class="allItem">all</a>
        <a href="javascript:void(0);" class="coaster">coaster</a>
        <a href="javascript:void(0);" class="porch">porch</a>
        <a href="javascript:void(0);" class="shopping bag">shopping bag</a>
        <a href="javascript:void(0);" class="others">others</a>
      </div><!-- /#filterBtn -->

      <div id="filterList">
        <ul>
          <li class="shopping bag"><img src="<?php echo get_template_directory_uri(); ?>/img/shoppingBag_beige1.jpg" alt=""></li>
          <li class="coaster"><img src="<?php echo get_template_directory_uri(); ?>/img/coaster_beige1.jpg" alt=""></li>
          <li class="porch"><img src="<?php echo get_template_directory_uri(); ?>/img/porch_beige1.jpg" alt=""></li>
          <li class="coaster"><img src="<?php echo get_template_directory_uri(); ?>/img/coaster_blue1.jpg" alt=""></li>
          <li class="porch"><img src="<?php echo get_template_directory_uri(); ?>/img/porch_blue1.jpg" alt=""></li>
          <li class="coaster"><img src="<?php echo get_template_directory_uri(); ?>/img/coaster_gray1.jpg" alt=""></li>
          <li class="porch"><img src="<?php echo get_template_directory_uri(); ?>/img/porch_double1.jpg" alt=""></li>
          <li class="shopping bag"><img src="<?php echo get_template_directory_uri(); ?>/img/shoppingBag_big1.jpg" alt=""></li>
          <li class="coaster"><img src="<?php echo get_template_directory_uri(); ?>/img/coaster_yellow1.jpg" alt=""></li>
          <li class="porch"><img src="<?php echo get_template_directory_uri(); ?>/img/porch_penguin1.jpg" alt=""></li>
          <li class="shopping bag"><img src="<?php echo get_template_directory_uri(); ?>/img/shoppingBag_blue1.jpg" alt=""></li>
          <li class="porch"><img src="<?php echo get_template_directory_uri(); ?>/img/porch_pink1.jpg" alt=""></li>
          <li class="shopping bag"><img src="<?php echo get_template_directory_uri(); ?>/img/shoppingBag_gray1.jpg" alt=""></li>
          <li class="shopping bag"><img src="<?php echo get_template_directory_uri(); ?>/img/shoppingBag_green1.jpg" alt=""></li>
          <li class="shopping bag"><img src="<?php echo get_template_directory_uri(); ?>/img/shoppingBag_pink1.jpg" alt=""></li>
          <li class="others"><img src="<?php echo get_template_directory_uri(); ?>/img/others_shortsPants_penguin1.jpg" alt=""></li>
          <li class="others"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow1.jpg" alt=""></li>
        </ul>
      </div><!-- /#filterList -->
    </div><!-- /#wrapper -->
  </main>

<?php get_footer(); ?>