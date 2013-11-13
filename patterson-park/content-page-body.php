<div class="se-post-body row">

  <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4">
    <div class="se-post-body-content">

      <?php the_content(); ?>

      <div class="fb-like" data-href="<?php echo 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

      <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

      <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
      </footer>

      <?php comments_template(); ?>

    </div>
  </div>

  <div class="md-local-nav col-md-3 col-md-pull-9 col-sm-4 col-sm-pull-8"><?php get_sidebar(); ?></div>

</div>
