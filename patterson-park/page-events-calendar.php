<?php
/*
Template Name: Events Calendar
*/
get_header();
?>


<div class="se-page-outer-wrap">
  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Feature Image -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="se-page-feature-image"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>


    <!-- Article -->
    <div class="se-page-inner-wrap">

      <!-- Header -->
      <header class="se-page-header">

        <div class="se-page-header-calendar">
          <?php the_field('calendar_html'); ?>
        </div>

        <h1 class="se-page-header-title"><?php the_title(); ?></h1>

      </header>


      <!-- Content -->
      <?php get_template_part('content', 'page-body'); ?>

    </div><!-- /.se-page-inner-wrap -->

  <?php endwhile; ?>
</div>


<?php get_footer();
