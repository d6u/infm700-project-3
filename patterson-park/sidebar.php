<?php
$menu_items = wp_get_nav_menu_items('header-menu');
$filtered_menu_items = array();

foreach ($menu_items as $item) {
  // is a root item
  if (!$item->menu_item_parent) {
    if ( $item->object_id == get_the_ID() ||
         $item->object_id == $post->post_parent ||
         $item->object_id == get_post($post->post_parent)->post_parent ) {
      array_push($filtered_menu_items, $item);
    }
  }
  // child item
  else {
    foreach ($filtered_menu_items as $save_item) {
      if ($item->menu_item_parent == $save_item->ID) {
        array_push($filtered_menu_items, $item);
        break;
      }
    }
  }
}
?>

<ul class="nav">
  <?php
    foreach ($filtered_menu_items as $item) :
      if (!$item->menu_item_parent) :
  ?>
    <li class="md-local-nav-parent">
  <?php elseif ($item->menu_item_parent == $filtered_menu_items[0]->ID) : ?>
    <li class="md-local-nav-child">
  <?php else: ?>
    <li class="md-local-nav-third-lv-item">
  <?php endif; ?>
      <a class="<?php if ($item->object_id == get_the_ID()) echo 'active' ?>" href="<?= $item->url ?>"><?= $item->title ?></a>
    </li>
  <?php endforeach; ?>
</ul>
