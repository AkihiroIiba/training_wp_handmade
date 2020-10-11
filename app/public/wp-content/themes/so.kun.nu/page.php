<?php get_header(); ?>

<section id="content">
<div  class="container">
<div  class="col-sm-9">

<?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
          <h3><?php the_title(); ?></h3>
          <section>
            <?php the_content(); ?>
          </section>
      <?php 
         endwhile;
      endif;
      ?>

</div>

</div>
</section>

<?php get_footer(); ?>