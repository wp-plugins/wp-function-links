<?php

//Function to display what is on the screen for the main page

function wpFunctionLinksAdminScreen() {
  ?>

  <div class="wrap">
    <div class="contentArea wpfl">
      <h2>WP Function Links</h2>      

      <!-- Plugin Sections Tabs -->
      <figure class="tabBlock">
        
        <!-- Tab Navigation -->
        <ul class="tabBlock-tabs">
          <li class="tabBlock-tab">How It Works</li>
          <li class="tabBlock-tab is-active">Use</li>
          <li class="tabBlock-tab">Plugin Settings</li>
          <li class="tabBlock-tab">About</li>
        </ul>
        
        <!-- BEG Tab Content -->
        <div class="tabBlock-content">
          <!-- "How It Works" Tab Content -->
          <div class="tabBlock-pane">
            <h3>How WP Function Links Works</h3>
            <p>WP Function Links plugin allows you to create clickable hyperlinks on your WordPress site specifically for user functions such as “email this page” or “view my account”. These function links are not accessible to most search engine bots so won’t interfere with the search engine spidering processes and allow search engines to use their resources following actual links to valuable pages. By using the shortcode below, the plugin dynamically generates functional hyperlinks using vanilla Javascript that look and respond just like the real thing. The user experience is seamless.</p>
            <p>This plugin should work in all modern browsers, but is incompatible with IE versions 8 and 9 (approximately 4% of all web users).</p>
          </div>
          <!-- "Use" Tab Content -->
          <div class="tabBlock-pane">
            
            <section>
              <h3>How to Create a Function Link</h3>
              <p>To create a function link, simply use the following shortcode, replacing all bolded text:</p>
              <div class="code">[function_link url="<b>DESTINATION_URL_GOES_HERE</b>"]<b>link_text_goes_here</b>[/function_link]</div>
              <br>
              <p>It’s that simple! Use that code in lieu of the typical a href code for a link and the plugin does the rest. There are additional options below that are not required, but do add flexibility when using this plugin.</p>
            </section>
            
            <section class="options">
              
              <section class="option_description">
                <h4>Optional: Set the link's target</h4>
                <p>The shorcode accepts a "target" attribute. This attribute controls how "link" will be opened and has a default value of "_self" to open links in the current window/tab. The following list contains the accepted attribute values.</p>
                <ul class="acceptedValues">
                  <li>_blank</li>
                  <li>_parent</li>
                  <li>_self</li>
                  <li>_top</li>
                </ul>
                <p>In order to use the target attribute, your shortcode should resemble the following example:</p>
                <div class="code">[function_link url="<b>DESTINATION_URL_GOES_HERE</b>" target="<b>_blank</b>"]<b>link_text_goes_here</b>[/function_link]</div>
              </section>
              
              <section class="option_description">
                <h4>Optional: Set the link's title</h4>
                <p>The shortcode also accepts one more attribute, the "title". This title attribute will be the text that displays when a user hovers over the text. To use this attribute follow this example, replacing the bolded text:</p>
                <div class="code">[function_link url="<b>DESTINATION_URL_GOES_HERE</b>" title="<b>This_is_my_title!</b>"]<b>link_text_goes_here</b>[/function_link]</div>
              </section>
              
            </section>

          </div>
          <!-- "Plugin Settings" Tab Content -->
          <div class="tabBlock-pane">
            
            <form method="post" action="options.php" id="wp_function_links_settings">
              <?php settings_fields( 'wp_function_links_options_group' ); ?>
              <?php do_settings_sections( 'wp_function_links_options_group' ); ?>
              
              <div  class="col-6">
                
                <h3>Link Settings</h3>
                
                <fieldset>
                  <input type="checkbox" name="wpfl_use_legacy_links" value="1" <?php checked( '1', get_option( 'wpfl_use_legacy_links' ) ); ?> />
                  <label>Use legacy links <span class="wpfl_tooltip" data-wpfl-tooltip="Checking this option will output the actual destination URL instead of the base64 code that is used to help prevent search bots from recognizing the link. This option is only recommended for those who must support IE versions 9 and before.">?</span></label>
                </fieldset>
                
                
              </div>
              
              <div class="col-6">
                
                <h3>Link Styles</h3>
                <section class="basicCustomStyles">
                  <fieldset class="linkStyleOptions">
                    <input type="checkbox" name="wpfl_remove_underline_links" value="1" <?php checked( '1', get_option( 'wpfl_remove_underline_links' ) ); ?> />
                    <label>Remove underline from links?</label>
                  </fieldset>
                  
                  <fieldset>
                    <input type="checkbox" name="wpfl_remove_all_styles" value="1" onclick="togglePluginStyles()" <?php checked( '1', get_option( 'wpfl_remove_all_styles' ) ); ?> />
                    <label>Remove all plugin styles <span class="wpfl_tooltip" data-wpfl-tooltip="Checking this option will prevent this plugin from using it's default stylesheet to control the styles of the function links. You will have to style everything yourself">?</span></label>
                    
                    <section id="customStylesInfo">
                      <p>You have chosen not to use the default styles for the function links. You can customize these function links the way you want by using the css selector "<strong>span.ppm-wpfl</strong>" in your theme's style sheets. </p>
                    </section>
                  </fieldset>
                  
                </section>
                
              </div>
              <div class="clearfloat"></div>
              <?php submit_button(); ?>
            </form>
          </div>
          <!-- "About" Tab Content -->
          <div class="tabBlock-pane">  
            <p>This plugin is developed and maintained by <a href="http://www.polepositionmarketing.com" target="_blank">Pole Position Marketing</a>.</p>
          </div>
        </div>
        <!-- END Tab Content -->
        
      </figure>
      
    </div>
  </div>

  <?php
}

