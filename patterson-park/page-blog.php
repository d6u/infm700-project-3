<?php
/*
Template Name: Blog Posts
*/
get_header();
$my_query = new WP_Query(array('post_type' => 'post'));
?>


<section class="se-blog-posts-wrap">
  <div class="container">
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
      <div class="se-post-item">
        <h2>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php if (has_post_thumbnail()) : ?>
        <div class="se-post-item-feature-image">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <div class="se-post-item-except">
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>


<?php get_footer();
