<?php
/*
Template Name: Blog Posts
*/
get_header();
$my_query = new WP_Query(array('post_type' => 'post'));
?>


<div class="se-page-outer-wrap">

  <!-- Article -->
  <div class="se-page-inner-wrap">

    <!-- Header -->
    <header class="se-page-header">
      <h1 class="se-page-header-title"><?php the_title(); ?></h1>
    </header>

    <div class="se-post-body row">
      <div class="md-local-nav col-md-3 col-sm-4"><?php get_sidebar(); ?></div>
      <div class="col-md-9 col-sm-8">
        <div class="se-post-body-content">
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
      </div>
    </div>



  <div class="container">

  </div>
</div>


<?php get_footer();
