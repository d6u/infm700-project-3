<?php get_header(); ?>

<!-- Banner -->
<div class="se-banner se-banner-homepage" style="background-image: url('/_img/test.jpg'); background-size: cover;">
  <div class="se-banner-p-inner">
    <div class="se-banner-p-i-caption">
      <h1 class="se-banner-p-i-c-title"><?php _e('The Friends of Patterson Park', 'patterson') ?></h1>
      <p class="se-banner-p-i-c-intro"><?php _e('The Friends of Patterson Park works to ensure the park’s vitality as a treasured green space and encourages use and appreciation by neighbors, visitors, and future generations.', 'patterson') ?></p>
    </div>
  </div>
</div>

<!-- Content -->
<div class="container">
  <div class="row">
    <h2 align="center"><?php _e('Friends Features', 'patterson') ?></h2>
    <div class="col-md-4">
      <h3><a href="/get_involved/"><?php _e('Get Involved', 'patterson')?></a></h3>
      <p><?php _e('The Friends of Patterson Park needs your help to keep Baltimores Best Backyard as a community oasis.  Volunteers and member donations help keep the Friends of Patterson Park going strong.  Get involved today!', 'patterson') ?></p>
      <img src="/_img/treeTeam.jpg" alt="<?php _e('Tree Team', 'patterson')?>" class="img-responsive">
      <p></p>
      <p><a class="btn btn-primary btn-md" href="/get_involved/"><?php _e('Get Involved', 'patterson') ?> &raquo;</a></p>
    </div>


    <div class="col-md-4">
      <h3><a href="/events/events_calendar.php"><?php _e('Events Calendar', 'patterson') ?></a></h3>
      <p><?php _e('Learn more about the amazing events that happen in Patterson Park every day and our outreach partners who make these events happen.  Visit the Events Calendar to view upcoming Patterson Park events.', 'patterson') ?></p>
      <img src="/_img/test2.jpg" alt="<?php _e('Kids Day', 'patterson')?>" class="img-responsive">
      <p></p>
      <p><a class="btn btn-primary btn-md" href="/events/events_calendar.php"><?php _e('View Events Calendar', 'patterson') ?> &raquo;</a></p>
    </div>


    <div class="col-md-4">
      <h3><a href="/park_places/park_map_and_resources.php"><?php _e('Park Map and Resources', 'patterson') ?></a></h3>
      <p><?php _e('Patterson Park is home to a recreational center, ice skating rink, swimming pool, sport fields, and more.  To find out how to get to Patterson Park and what the park can offer you, go to our Park Map.') ?></p>
      <img src="/_img/pool2.jpg" alt="<?php _e('Patterson Park Swimming Pool', 'patterson')?>" class="img-responsive">
      <p></p>
      <p><a class="btn btn-primary btn-md" href="/park_places/park_map_and_resources.php"><?php _e('Visit Park Map', 'patterson')?> &raquo;</a></p>
    </div>
  </div>
</div>

<?php get_footer();
