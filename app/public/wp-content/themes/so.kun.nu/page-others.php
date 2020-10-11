<?php
/**
 * Template Name: others
 * Description: その他
 */
 ?>
<?php get_header(); ?>
  <main>
    <section id="shopping">
      <div id="shopping1">
        <h2>others</h2>
      </div>
      <div id="shopping2">
        <a href="#sw_othersSPP1">shorts pants penguin</a>
        <a href="#sw_othersPillow1">pillow</a>
      </div>
    </section>

    <!--///// shorts pants penguin ///// -->
    <section id="sw_othersSPP1">
      <div class="shopping1">
        <div class="shopping2">
          <div class="swiper-container swc_othersSPP">
            <ul class="swiper-wrapper">
              <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/others_shortsPants_penguin1.jpg" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"></li>
              <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/others_shortsPants_penguin2.jpg" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"></li>
            </ul>
          </div>
          <ul class="thumb-list">
            <li class="thumb-item"><img src="<?php echo get_template_directory_uri(); ?>/img/others_shortsPants_penguin1.jpg"  alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg" class="thumb-link" href="javascript:void(0); "
                onclick="slideThumbOSPP(1)"></li>
            <li class="thumb-item"><img src="<?php echo get_template_directory_uri(); ?>/img/others_shortsPants_penguin2.jpg" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"  class="thumb-link" href="javascript:void(0); "
                onclick="slideThumbOSPP(2)"></li>
          </ul>
        </div>
        <div class="shopping3">
          <h4>shorts pants penguin</h4>
          <ul>
            <li>size<br>W:15cm H:30cm </li>
            <li>comment<br>世代を問わず女性に人気の商品です。</li>
          </ul>
        </div>
      </div>
    </section>

    <!--///// pillow ///// -->
    <section id="sw_othersPillow1">
      <div class="shopping1">
        <div class="shopping2">
          <div class="swiper-container swc_othersPillow">
            <ul class="swiper-wrapper">
              <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow1.jpg" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"></li>
              <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow2.jpg" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"></li>
              <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow3.jpg" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"></li>
            </ul>
          </div>
          <ul class="thumb-list">
            <li class="thumb-item"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow1.jpg"  alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg" class="thumb-link" href="javascript:void(0); "
                onclick="slideThumbOPillow(1)"></li>
            <li class="thumb-item"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow2.jpg"  alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg" class="thumb-link" href="javascript:void(0); "
                onclick="slideThumbOPillow(2)"></li>
            <li class="thumb-item"><img src="<?php echo get_template_directory_uri(); ?>/img/others_pillow3.jpg"  alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg" class="thumb-link" href="javascript:void(0); "
                onclick="slideThumbOPillow(3)"></li>
          </ul>
        </div>
        <div class="shopping3">
          <h4>pillow</h4>
          <ul>
            <li>size<br>W:15cm H:30cm </li>
            <li>comment<br>世代を問わず女性に人気の商品です。</li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>