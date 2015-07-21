﻿=== WP Function Links ===
Requires at least: 2.5
Tested up to: 4.2.2
License: GPL2
Contributors: polepositionmarketing
Stable tag: 1.1.4


Use a shortcode to generate clickable links that do NOT pass on link juice in order to boost the link value of the other links on the page.

== Description ==
**The Problem:**

Many website links are not actually links to new or unique content but functions for the visitor. However, because these functions often lead to unique web URLs, search engines allow those “links” to lose link value. Value that is ultimately lost on URLs that produce no inherent value to searchers.

**Types of Functions:**

The following are typical functions that utilize traditional hyperlinks. More often than not, you never want searchers to land on these unique URLs.

*	sort 
*	compare 
*	add to cart 
*	filter 
*	email 
*	email this page 
*	view cart 
*	view account 
*	login 
*	logout 
*	socialize 
*	add to wishlist 
*	review

**The Solution:**

WP Function Links plugin allows you to create clickable hyperlinks on your WordPress site specifically for these types of functions. The plugin creates the ability for you to remove these functions from traditional a href links. The visitor is then able execute the function no differently than before but without it being treated as a link to another URL.  

Since these functions are generally not accessible to most search engine bots it won’t interfere with the search engine spidering processes, allowing the search engines to use their resources following actual links to valuable pages. 



== Installation ==
**Easy Install Through WordPress:**

1. Log in to WordPress and navigate to the WordPress Plugins menu on the left
2. Click the add new button at the top of the page
3: Search and find the 'WP Function Links' plugin
4: Click the 'Install Now' button for the plugin
5: Activate the plugin
6. Use the plugin's shortcode on any page, post, or template


**Download & Upload To Website via WordPress:**

1. Download the plugin zip file from the WordPress.org plugin repository
2. Log in to WordPress and navigate to the WordPress Plugins menu on the left
3. Click the add new button at the top of the page
4. Choose the plugin's zip folder that you downloaded from the WordPress plugin repository
6. Install the plugin
7. Activate the plugin
8. Use the plugin's shortcode on any page, post, or template

**Download and Upload Using SFTP:**

1. Download the plugin zip file from the WordPress.org plugin repository
2: Connect your website's server via SFTP
3: Navigate to the `/wp-content/plugins/` directory on your server
4: Unzip the plugin zip file you downloaded on your local machine
5: Upload the plugin to the `/wp-content/plugins/` directory on your server
6. Activate the plugin through the 'Plugins' menu in WordPress
7. Use the plugin's shortcode on any page, post, or template



== Changelog ==
= 1.1.4 =
* Fixed stable tag issue

= 1.1.3 =
* Updated the plugin's repository description and infromation tabs to be more legible (better MarkDown)

= 1.1.2 =
* Updated the plugin's repository page images

= 1.1.1 =
* Updated the plugin's description.
* Updated the how to use this plugin instructions
* Added a support tab and a description tab
* Removed the "About" tab
* Added social links

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
* Modularized the plugin's code
* Significantly improved the inline documentation

= 1.0.5 =
* Updated the namespacing to help prevent any code conflicts