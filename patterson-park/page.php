<?php get_header(); ?>


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

        <h1 class="se-page-header-title"><?php the_title(); ?></h1>

        <?php if (get_field('call_to_action_paragraph')) : ?>
        <p class="se-page-header-call-to-action-paragraph">
          <?php the_field('call_to_action_paragraph'); ?>
        </p>
        <?php endif; ?>

        <?php if (get_field('call_to_action_button_text')) : ?>
        <div class="se-page-header-call-to-action-button">
          <a href="<?php the_field('call_to_action_button_url'); ?>" class="btn btn-success btn-lg"><?php the_field('call_to_action_button_text'); ?></a>
        </div>
        <?php endif; ?>

      </header>

      <!-- Content -->
      <?php get_template_part('content', 'page-body'); ?>

    </div><!-- /.se-page-inner-wrap -->

  <?php endwhile; ?>
  
  
</div>


<?php get_footer();
