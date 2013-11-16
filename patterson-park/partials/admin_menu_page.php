<div class="wrap">

  <div id="icon-options-general" class="icon32"></div>
  <h2>The Patterson Theme Settings</h2>

  <!-- Form -->
  <form name="wp_patterson_form" method="post" action="">
    <input type="hidden" name="wp_patterson_form_submitted" value="Y" />

    <table class="form-table">

      <tr valign="top">
        <td scope="row">
          <label for="wp_patterson_address">Address</label>
        </td>
        <td>
          <textarea id="wp_patterson_address" name="wp_patterson_address" cols="80" rows="4" class="all-options" placeholder="Enter Address"><?php echo $wp_patterson_address; ?></textarea>
          <p class="description">Note: the address here will be displayed on footer and used to create url for "get direction from google" link.</p>
        </td>
      </tr>

      <tr valign="top">
        <td scope="row">
          <label for="wp_patterson_facebook_url">Facebook Page URL</label>
        </td>
        <td>
          <input name="wp_patterson_facebook_url" id="wp_patterson_facebook_url" type="text" value="<?php echo $wp_patterson_facebook_url; ?>" class="regular-text" placeholder="Enter Facebook Page URL" />
          <p class="description">Note: this will set the url for Facebook icon on the top navigation bar.</p>
        </td>
      </tr>

      <tr valign="top">
        <td scope="row">
          <input class="button-primary" type="submit" name="submit" value="<?php _e('Update Settings', 'patterson'); ?>" />
        </td>
        <td></td>
      </tr>

    </table>
  </form>
</div> <!-- .wrap -->
