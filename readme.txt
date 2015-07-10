=== WP Function Links ===
Requires at least: 2.5
Tested up to: 4.2.2
License: GPL2
Contributors: polepositionmarketing
Stable tag: 1.1.0


Use a shortcode to generate clickable links that do NOT pass on link juice in order to boost the link value of the other links on the page.

== Description ==
WP Function Links plugin allows you to create clickable hyperlinks on your WordPress site specifically for user functions such as “email this page” or “view my account”. These function links are not accessible to most search engine bots so won’t interfere with the search engine spidering processes and allow search engines to use their resources following actual links to valuable pages. By using the shortcode below, the plugin dynamically generates functional hyperlinks using vanilla Javascript that look and respond just like the real thing. The user experience is seamless.

This plugin should work in all modern browsers, but is incompatible with IE versions 8 and 9 (approximately 4% of all web users).


== Installation ==
Easy Install Through WordPress:
1. Log in to WordPress and navigate to the WordPress Plugins menu on the left
2. Click the add new button at the top of the page
3: Search and find the \'WP Function Links\' plugin
4: Click the \'Install Now\' button for the plugin
5: Activate the plugin
6. Use the plugin\'s shortcode on any page, post, or template

Download & Upload To Website via WordPress:
1. Download the plugin zip file from the WordPress.org plugin repository
2. Log in to WordPress and navigate to the WordPress Plugins menu on the left
3. Click the add new button at the top of the page
4. Choose the plugin\'s zip folder that you downloaded from the WordPress plugin repository
6. Install the plugin
7. Activate the plugin
8. Use the plugin\'s shortcode on any page, post, or template

Download and Upload Using SFTP:
1. Download the plugin zip file from the WordPress.org plugin repository
2: Connect your website\'s server via SFTP
3: Navigate to the `/wp-content/plugins/` directory on your server
4: Unzip the plugin zip file you downloaded on your local machine
5: Upload the plugin to the `/wp-content/plugins/` directory on your server
6. Activate the plugin through the \'Plugins\' menu in WordPress
7. Use the plugin\'s shortcode on any page, post, or template



== Changelog ==
= 1.1.0 =
* Removed all inline styles and javascript
* All CSS and JS files are now enqued
* Removed some options from the settings page
* Updated the way the plugin detects the legacy links (now using a body class)
* Updated the way the underlined styles are applied or not applied
* Added a front end css file

= 1.0.9 =
* Renamed a funtion to better clarify its meaning. 

= 1.0.8 =
* Updated the way that the plugin includes files for better compatibility
* Added WordPress Hooks for the style and Javascript functions so that they are loaded more efficiently

= 1.0.7 =
* Fixed the legacy links function, removed all jQuery from the code.
* Fixed the inline javascript so that it now works properly.

= 1.0.6 =
* Modularized the plugin\\\'s code
* Significantly improved the inline documentation

= 1.0.5 =
* Updated the namespacing to help prevent any code conflicts