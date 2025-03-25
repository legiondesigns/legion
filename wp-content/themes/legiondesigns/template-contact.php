<?php
/*
Template Name: Contact Page
*/

get_header('sub'); ?>

<div class="content">
                                                             
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="entry-content" itemprop="text">
      <?php the_content(); ?>
    </section> <!-- end article section -->

  <?php endwhile; endif; ?>             
  
</div> <!-- end content -->

<?php get_footer(); ?>