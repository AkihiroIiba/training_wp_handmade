<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/171f5fd069.js" crossorigin="anonymous"></script>
  <!-- swiper -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css"> -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!-- jquery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <!-- css -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>
</head>



<body>
  <header>
    <div id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo get_template_directory_uri(); ?>/img/no_img.jpg"></div>
    <nav id="globalMenu">
      <ul>
        <li><a href="http://sokunnu.local/">Home</a></li>
        <li>
			<a href="http://sokunnu.local/portfolio/">portfolio</a>
          <li><a href="http://sokunnu.local/portfolio/coaster/" class="portfolio-sub">-&nbsp;&nbsp;coaster</a></li>
          <li><a href="http://sokunnu.local/portfolio/porch/" class="portfolio-sub">-&nbsp;&nbsp;porch</a></li>
          <li><a href="http://sokunnu.local/portfolio/shoppingbag/" class="portfolio-sub">-&nbsp;&nbsp;shopping bag</a></li>
          <li><a href="http://sokunnu.local/portfolio/others/" class="portfolio-sub">-&nbsp;&nbsp;others</a></li>
        </li>
      </ul>
    </nav><!-- /#globalMenu -->
  </header>
