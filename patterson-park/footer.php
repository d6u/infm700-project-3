    <!-- Map Block -->
    <div class="se-map-block">
      <div class="se-map-block-canvas" id="se-map-block-canvas"></div>
      <div class="se-map-block-detail">
        <div class="se-map-block-d-container">
          <div class="se-map-block-d-inner">
            <header class="se-map-block-d-i-header"><?php _e('Find us at:', 'patterson') ?></header>
            <address class="se-map-block-d-i-address">
              <?php _e('27 South Patterson Park Avenue', 'patterson') ?><br/>
              <?php _e('Baltimore, MD 21231', 'patterson') ?>
            </address>
            <a href="https://www.google.com/maps/preview#!q=Patterson+Park%2C+Baltimore%2C+MD" class="se-map-block-d-i-get-direction"><?php _e('Get Directions from Google', 'patterson') ?></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="se-footer">
      <div class="se-footer-inner">
        <!-- Left -->
        <div class="se-footer-inner-column">
          <?php if ( !dynamic_sidebar('footer_left') ) : ?>
            <header class="se-footer-section-header"><?php _e('Add a widget to this area in the dashboard widget menu.', 'patterson') ?></header>
          <?php endif; ?>
        </div>

        <!-- Middle -->
        <div class="se-footer-inner-column">
          <?php if ( !dynamic_sidebar('footer_middle') ) : ?>
            <header class="se-footer-section-header"><?php _e('Add a widget to this area in the dashboard widget menu.', 'patterson') ?></header>
          <?php endif; ?>
        </div>

        <!-- Right -->
        <div class="se-footer-inner-column">
          <?php if ( !dynamic_sidebar('footer_right') ) : ?>
            <header class="se-footer-section-header"><?php _e('Add a widget to this area in the dashboard widget menu.', 'patterson') ?></header>
          <?php endif; ?>
        </div>

      </div>
    </footer>
    <div class="se-footer-copyright"><?php _e('Copyright © 2013 Friends of Patterson Park. All Rights Reserved.', 'patterson') ?></div>
  </div>

  <?php wp_footer(); ?>

  <script>
  // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  // g.src='//www.google-analytics.com/ga.js';
  // s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</div>


</body>
</html>
