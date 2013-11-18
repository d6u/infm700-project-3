<?php
function query_children_pages($page) {
  $children = get_posts(array(
    'post_type'      => 'page',
    'post_parent'    => $page->ID,
    'orderby'        => 'menu_order',
    'posts_per_page' => 50
  ));
  return count($children) ? $children : null;
}

if ($post->post_type === 'page') {
  if (!$post->post_parent) {
    $root_page = $post;
  } else if (!get_post($post->post_parent)->post_parent) {
    $root_page = get_post($post->post_parent);
  } else {
    $root_page = get_post(get_post($post->post_parent)->post_parent);
  }
}

$filtered_menu_items = array();
$filtered_menu_items[] = $root_page;

foreach (query_children_pages($root_page) as $child_page) {
  $filtered_menu_items[] = $child_page;
  $grandchildren = query_children_pages($child_page);
  if ($grandchildren) {
    $filtered_menu_items = array_merge($filtered_menu_items, $grandchildren);
  }
}

?>

<ul class="nav">
  <?php
    foreach ($filtered_menu_items as $item) :
      if (!$item->post_parent) :
  ?>
    <li class="md-local-nav-parent">
  <?php elseif ($item->post_parent == $filtered_menu_items[0]->ID) : ?>
    <li class="md-local-nav-child">
  <?php else: ?>
    <li class="md-local-nav-third-lv-item">
  <?php endif; ?>
      <a class="<?php if ($item->ID == get_the_ID()) echo 'active' ?>" href="<?= $item->guid ?>"><?php _e($item->post_title); ?></a>
    </li>
  <?php endforeach; ?>
</ul>
