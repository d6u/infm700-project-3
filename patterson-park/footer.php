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
        <div class="se-footer-i-contact-info">
          <header class="se-footer-section-header"><?php _e('Contact Us', 'patterson')?></header>
          <ul class="se-footer-section-list">
            <li><span><?php _e('Phone: ', 'patterson') ?></span><span>410-276-3676</span></li>
            <li><span><?php _e('Fax: ', 'patterson') ?></span><span>410-327-7592</span></li>
            <li><span><?php _e('Email: ', 'patterson') ?></span><span>Friends@PattersonPark.com</span></li>
          </ul>
        </div>

        <!-- Middle -->
        <div class="se-footer-i-subscribe">
          <header class="se-footer-section-header"><?php _e('Subscribe to Email Newsletter', 'patterson') ?></header>
          <input type="email" class="se-footer-section-input" placeholder="<?php _e('Email Address', 'patterson') ?>">
          <button class="btn btn-success"><?php _e('Subscribe', 'patterson') ?></button>
          <ul class="se-footer-social-networks">
            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/facebook-icon.png" alt=""></a></li>
            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/rss-icon.png" alt=""></a></li>
            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/email-icon.png" alt=""></a></li>
          </ul>
        </div>

        <!-- Right -->
        <div class="se-footer-i-search">
          <header class="se-footer-section-header"><?php _e('Search this Website', 'patterson')?></header>
          <input type="text" class="se-footer-section-input" placeholder="<?php _e('Search Site', 'patterson') ?>">
          <button class="btn btn-primary"><?php _e('Search', 'patterson')?></button>
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
