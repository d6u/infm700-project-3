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


    <article class="se-post-container-inner">
      <!-- Header -->
      <section class="se-post-header<?php if (has_post_thumbnail()) echo ' has-feature-image'; ?>">
        <header class="se-post-title">
          <h1><?php the_title(); ?></h1>
        </header>
      </section>

      <!-- Body -->
      <section class="se-post-body row">
        <div class="md-local-nav col-md-3 col-sm-4"><?php get_sidebar(); ?></div>
        <div class="col-md-9 col-sm-8">
          <div class="se-post-body-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            <footer class="entry-meta">
              <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-meta -->
            <?php comments_template(); ?>
          </div>
        </div>
      </section>
    </article>

  <?php endwhile; ?>
</div>


<?php get_footer();
