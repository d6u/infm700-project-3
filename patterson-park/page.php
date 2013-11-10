<?php get_header(); ?>
<?php // get_template_part('content', 'banner'); ?>


<div class="se-post-container">
  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Feature Image -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="se-post-container-feature-image">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php endif; ?>

    <?php get_template_part('content', 'article'); ?>

  <?php endwhile; ?>
</div>


<?php get_footer();
