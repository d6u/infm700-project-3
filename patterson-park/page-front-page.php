<?php
/*
Template Name: Front Page
*/

function echo_feature_block($rank) {
  ?><div class="col-md-6">
    <div class="se-front-page-feature-block-wrap">
      <h3><a href="<?php the_field("{$rank}_block_url"); ?>"><?php _e(get_field("{$rank}_block_title"), 'patterson')?></a></h3>
      <p class="se-front-page-feature-block-paragraph"><?php _e(get_field("{$rank}_block_paragraph"), 'patterson') ?></p>
      <div class="se-front-page-feature-block-image-container" style="background-image: url('<?php echo get_field("{$rank}_block_image")['url']; ?>');"></div>
      <p><a class="btn btn-primary btn-md" href="<?php the_field("{$rank}_block_url"); ?>"><?php _e('Go to '.get_field("{$rank}_block_title"), 'patterson') ?> &raquo;</a></p>
    </div>
  </div><?php
}

get_header();
?>


<!-- Banner -->
<div class="se-banner se-banner-homepage" style="background-image: url('<?php
  echo get_field('banner_image')['url']; ?>'); background-size: cover;">
  <div class="se-banner-p-inner">
    <div class="se-banner-p-i-caption">

      <h1 class="se-banner-p-i-c-title"><?php
        _e(get_field('banner_title'), 'patterson') ?></h1>

      <?php if (get_field('banner_paragraph')) : ?>
      <p class="se-banner-p-i-c-intro"><?php
        _e(get_field('banner_paragraph'), 'patterson') ?></p>
      <?php endif; ?>

    </div>
  </div>
</div>

<!-- Content -->
<div class="container">
  <h2 align="center"><?php _e('Friends Features', 'patterson') ?></h2>

  <div class="row">
    <!-- Feature Blocks -->
    <div class="col-md-8">

      <div class="row">
        <?php echo_feature_block('1st'); ?>
        <?php echo_feature_block('2nd'); ?>
      </div>

      <div class="row">
        <?php echo_feature_block('3rd'); ?>
        <?php echo_feature_block('4th'); ?>
      </div>
    </div>

    <!-- Facebook -->
    <div class="col-md-4 hidden-xs">
      <div class="se-front-page-feature-block-wrap">
        <div class="fb-like-box" data-href="https://www.facebook.com/infm700teamyellow" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
      </div>
    </div>
  </div>
</div>


<?php get_footer();
