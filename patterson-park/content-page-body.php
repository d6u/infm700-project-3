<div class="se-post-body row">
  <div class="md-local-nav col-md-3 col-sm-4"><?php get_sidebar(); ?></div>
  <div class="col-md-9 col-sm-8">
    <div class="se-post-body-content">
      <?php the_content(); ?>
	  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
      <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
      </footer><!-- .entry-meta -->
      <?php comments_template(); ?>
    </div>
  </div>
</div>
