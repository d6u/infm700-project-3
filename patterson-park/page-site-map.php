<?php
/*
Template Name: Site Map
*/
get_header();

$my_wp_query = new WP_Query(array(
  'post_type'      => 'page',
  'orderby'        => 'menu_order',
  'order'          => 'ASC',
  'posts_per_page' => -1
));

// $site_map_pages = get_pages(array('sort_column' => 'menu_order'));
$site_map_pages = $my_wp_query->posts;

function build_tree(Array $pages, $parent_id = 0) {
  $tree = array();
  foreach ($pages as $page) {
    if ($page->post_parent == $parent_id) {
      $children_page = build_tree($pages, $page->ID);
      if (!empty($children_page)) {
        $page->post_children = $children_page;
      }
      $tree[] = $page;
    }
  }
  return $tree;
}

$pages_tree = build_tree($site_map_pages);

function print_tree(Array $tree) {
  echo "<ul>";
  foreach ($tree as $branch) {
    echo "<li><a href=".$branch->guid.">".__($branch->post_title, 'patterson')."</a>";
    if (isset($branch->post_children)) print_tree($branch->post_children);
    echo "</li>";
  }
  echo "</ul>";
}
?>


<div class="se-page-outer-wrap">
  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Article -->
    <div class="se-page-inner-wrap">

      <!-- Header -->
      <header class="se-page-header">
        <h1 class="se-page-header-title"><?php the_title(); ?></h1>
      </header>


      <!-- Content -->
      <div class="se-post-body">
        <div class="se-post-body-content">
          <?php print_tree($pages_tree); ?>
        </div>
      </div>


    </div><!-- /.se-page-inner-wrap -->

  <?php endwhile; ?>
</div>


<?php get_footer();
