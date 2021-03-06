=== Arabic-Indic Numerals for Arabic Wordpress ===
Contributors: jvarn13
Tags: arabic, numbers, numerals, أرقام، عربية، هندية
Requires at least: 1.5
Tested up to: 4.2.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replaces "English" numbers with "Arabic" numbers in the Wordpress post date.

== Description ==

هذه الاضافة تستبدل الأرقام العربية بأرقام هندية في تواريخ ووردبريس المعرّب.

This simple code replaces Arabic numerals (a.k.a. Hindu-Arabic numerals or Indo-Arabic numerals) with Eastern Arabic numerals (a.k.a. Arabic–Indic numerals or Arabic Eastern numerals) in the date of posts or comments on WordPress. The Arabic version of WordPress changes the month names but leaves the numbers unchanged.

For the sake of simplicity I’m calling them “English” numbers and “Arabic” numbers.

== Installation ==

1. Upload plugin files to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can either set the date format in Wordpress settings to j F Y to change every date, or specify the format in specific places in your theme by placing `<?php echo get_the_time('j F Y'); ?>` in your templates.


== Frequently Asked Questions ==
= Does this plugin translate the names of months into Arabic? =
No, you will need to install the Arabic version of Wordpress.

= Will all the dates be written in Arabic-Indic numbers? =
No, the dates will only be modified on parts of your site where the blog language is set to Arabic.

== Screenshots ==

1. The date in j F Y format in Arabic.
2. Example of date on Twenty Fourteen theme without the plugin.
3. Example of date on Twenty Fourteen theme with the plugin.

== Changelog ==

= 0.16 =
* Added filter to get_the_date in addition to the get_the_time filter.

= 0.15 =
* Initial public release.


== Upgrade Notice ==
Nothing
= 0.15 =