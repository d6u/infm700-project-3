<?php
/*
Template Name: Event Page
*/
get_header();
?>


<div class="se-page-outer-wrap">
  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Feature Image -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="se-page-feature-image"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>


    <!-- Article -->
    <div class="se-page-inner-wrap">

      <!-- Header -->
      <header class="se-page-header">

        <!-- Event Info -->
        <div class="se-page-header-event-wrap">
          <div class="se-page-header-event-datetime<?php if (get_field('event_time')) echo ' has-time'?>">
            <div class="se-page-header-event-date"><?php
              $date = new DateTime(get_field('event_date'));
              echo $date->format('F, Y');
            ?></div>
            <div class="se-page-header-event-day"><?php echo $date->format('d'); ?></div>
            <?php if (get_field('event_time')) : ?>
            <div class="se-page-header-event-time"><?php the_field('event_time'); ?></div>
            <?php endif; ?>
          </div>
          <div class="se-page-header-event-location">
            <?php $location = get_field('event_location'); ?>
            <div class="se-page-header-event-map-canvas">
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            <div class="se-page-header-event-address">
              <a href="<?php the_field('link_to_place_on_google_map'); ?>" target="_blank"><?php echo $location['address']; ?></a>
            </div>
            <script>
              // TODO: move into a javascript file
              (function($) {
                function render_map( $el ) {
                  var $markers = $el.find('.marker');
                  var args = {
                    zoom: 13,
                    center: new google.maps.LatLng(0, 0),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    disableDefaultUI: true,
                    disableDoubleClickZoom: true,
                    draggable: false,
                    keyboardShortcuts: false,
                    scrollwheel: false
                  };
                  var map = new google.maps.Map($el[0], args);
                  map.markers = [];
                  $markers.each(function() {
                    add_marker($(this), map);
                  });
                  center_map(map);
                }

                function add_marker( $marker, map ) {
                  var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
                  var marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                  });
                  map.markers.push( marker );
                  // if( $marker.html() ) {
                  //   // create info window
                  //   var infowindow = new google.maps.InfoWindow({
                  //     content   : $marker.html()
                  //   });
                  //   // show info window when marker is clicked
                  //   google.maps.event.addListener(marker, 'click', function() {
                  //     infowindow.open( map, marker );
                  //   });
                  // }
                }

                function center_map( map ) {
                  var bounds = new google.maps.LatLngBounds();
                  $.each( map.markers, function( i, marker ){
                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
                    bounds.extend( latlng );
                  });

                  if( map.markers.length == 1 ) {
                      map.setCenter( bounds.getCenter() );
                      map.setZoom( 13 );
                  } else {
                    map.fitBounds( bounds );
                  }
                }

                $(document).ready(function(){
                  $('.se-page-header-event-map-canvas').each(function() {
                    render_map( $(this) );
                  });
                });
              })(jQuery);
            </script>
          </div>
        </div>

        <h1 class="se-page-header-title"><?php the_title(); ?></h1>

      </header>


      <!-- Content -->
      <?php get_template_part('content', 'page-body'); ?>

    </div><!-- /.se-page-inner-wrap -->

  <?php endwhile; ?>
</div>


<?php get_footer();
