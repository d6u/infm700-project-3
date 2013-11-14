<?php
/*
Template Name: Search Page
*/
get_header();
?>


<div class="se-page-outer-wrap">

  <!-- Article -->
  <div class="se-page-inner-wrap">

    <!-- Header -->
    <header class="se-page-header">
    <?php if(!have_posts()) : ?>
      <h1 class="se-page-header-title"><?php _e('Nothing Found', 'twentythirteen'); ?></h1>
    </header>
    <?php else: ?>
      <h1 class="se-page-header-title"><?php printf( __('Search Results for: %s', 'twentythirteen'), get_search_query() ); ?></h1>
    </header>

    <div class="se-post-body row">
      <div class="se-post-body-content">
        <?php while ( have_posts() ) : the_post(); ?>
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
    </div>
    <?php endif; ?>

  <div class="container">

  </div>
</div>


<?php get_footer();
