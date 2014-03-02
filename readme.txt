=== Arabic-Indic Numerals for Arabic Wordpress ===
Contributors: jvarn13
Tags: arabic, numbers, numerals
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replaces "English" numbers with "Arabic" numbers in the Wordpress post date.

== Description ==

This simple code replaces Arabic numerals (a.k.a. Hindu-Arabic numerals or Indo-Arabic numerals) with Eastern Arabic numerals (a.k.a. Arabic–Indic numerals or Arabic Eastern numerals) in the date of posts or comments on WordPress. The Arabic version of WordPress changes the month names but leaves the numbers unchanged.

For the sake of simplicity I’m calling them “English” numbers and “Arabic” numbers.


== Installation ==

1. Upload plugin files to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can either set the date format in Wordpress settings to j F Y to change every date, or specify the format in specific places in your theme by placing `<?php echo get_the_time('j F Y'); ?>` in your templates.


== Frequently Asked Questions ==
None

== Screenshots ==

1. The date in j F Y format in Arabic.

== Changelog ==

= 0.16 =
* Added filter to get_the_date in addition to the get_the_time filter.

= 0.15 =
* Initial public release.


== Upgrade Notice ==
Nothing
= 0.15 =