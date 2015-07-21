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
          <li class="tabBlock-tab">Description</li>
          <li class="tabBlock-tab">How It Works</li>
          <li class="tabBlock-tab is-active">Use</li>
          <li class="tabBlock-tab">Plugin Settings</li>
          <li class="tabBlock-tab">Support</li>
        </ul>
        
        <!-- BEG Tab Content -->
        <div class="tabBlock-content">
          <!-- "Description" Tab Content -->
          <div class="tabBlock-pane description">

            <h3>The Problem</h3>
            <p>Many website links are not actually links to new or unique content but functions for the visitor. However, because these functions often lead to unique web URLs, search engines allow those “links” to lose link value. Value that is ultimately lost on URLs that produce no inherent value to searchers.</p>

            <h3>Types of Functions</h3>
            <p>The following are typical functions that utilize traditional hyperlinks. More often than not, you never want searchers to land on these unique URLs.</p>
            <ul>
              <li>sort</li>
              <li>compare</li>
              <li>add to cart</li>
              <li>filter</li>
              <li>email</li>
              <li>email this page</li>
              <li>view cart</li>
              <li>view account</li>
              <li>login</li>
              <li>logout</li>
              <li>socialize</li>
              <li>add to wishlist</li>
              <li>review</li>
            </ul>
            <h3>The Solution</h3>
            <p>WP Function Links plugin allows you to create clickable hyperlinks on your WordPress site specifically for these types of functions. The plugin creates the ability for you to remove these functions from traditional a href links. The visitor is then able execute the function no differently than before but without it being treated as a link to another URL.</p>
            <p>Since these functions are generally not accessible to most search engine bots it won’t interfere with the search engine spidering processes, allowing the search engines to use their resources following actual links to valuable pages. </p>
          </div>
          <!-- "How It Works" Tab Content -->
          <div class="tabBlock-pane">
            <h3>How WP Function Links Works</h3>
            <p>By using the shortcode below on each function link, the plugin will dynamically generate functional hyperlinks using vanilla Javascript that look and respond just like the real thing. The user experience is seamless.</p>
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
                <p>The shortcode accepts a "target" attribute. This attribute controls how "link" will be opened and has a default value of "_self" to open links in the current window/tab. The following list contains the accepted attribute values.</p>
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
                <div class="code">[function_link url="<b>DESTINATION_URL_GOES_HERE</b>" title="<b>Link_Title_Goes_Here!</b>"]<b>link_text_goes_here</b>[/function_link]</div>
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
            <h3>Have an issue?</h3>
            <p>Let us know about any issues, bugs, or feature requests on <a href="https://wordpress.org/support/plugin/wp-function-links" target="_blank">our support page</a>.</p>
          </div>
        </div>
        <!-- END Tab Content -->
        
      </figure>
      
      <section id="author_information">
        <p>This plugin is developed and maintained by <a href="http://www.polepositionmarketing.com" target="_blank">Pole Position Marketing</a>.</p>
        
        <ul id="social_links">
          <li><a href="https://wordpress.org/support/profile/polepositionmarketing" target="_blank">WordPress</a></li>
          <li><a href="http://www.facebook.com/PolePositionMarketing" target="_blank">Facebook</a></li>
          <li><a href="https://twitter.com/PolePositionMkg" target="_blank">Twitter</a></li>
          <li><a href="http://www.linkedin.com/company/pole-position-marketing" target="_blank">LinkedIn</a></li>
          <li><a href="https://plus.google.com/+PolePositionMarketing/posts" target="_blank">Google+</a></li>
          <li><a href="http://www.youtube.com/user/PolePositionMKG" target="_blank">YouTube</a></li>
        </ul>
      </section>
      
    </div>
  </div>

  <?php
}

