=== Wordpress Messenger Customer Chat Plugin (WPMCCP) ===
Contributors: dorelljames
Donate link: https://dorelljames.com/donate/
Tags: messenger customer chat plugin, messenger chat, messenger plugin, wordpress messenger, wordpress messenger plugin
Requires at least: 4.9
Tested up to: 5.3
Stable tag: 1.5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Wordpress Messenger Customer Chat Plugin (WPMCCP) allows you to integrate your Messenger experience directly into your website.

== Description ==

Facebook recently made available in open beta their [Messenger Customer Chat Plugin](https://developers.facebook.com/docs/messenger-platform/discovery/customer-chat-plugin) which allows you to integrate your Messenger experience directly into your website.

This plugin just makes it easy for you to add this on your website by just putting your Facebook Page ID and whitelisting your domain on your Facebook Page.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload entire `wp-messenger-customer-chat-plugin` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

You will find Wordpress Messenger Customer Chat Plugin menu in your WordPress admin panel.

== Frequently Asked Questions ==

= How can I get my Facebook Page ID? =

A detailed guide is written on the plugin's settings page. Or you can use [Find Your Facebook ID](https://findmyfbid.in) to do it or on FB Page > About and scroll bottom to see it.

= I already entered my Facebook Page ID but it doens't work. Why? =

Make sure to whitelist your site's domain in your Facebook Page > Settings > Messenger Platform. Make sure that the correct protocol and domain is saved.

= I changed the language and it doesn't work. Why? =

There are other plugins or perhaps your theme which includes the FB SDK. The FB SDK language loaded by default sets the language. In order for this plugin to change language and work, it's either you remove the FB SDK so this plugin can set the language properly or you change the current FB SDK language.

== Changelog ==

= 1.5.2 =
* Tested up to WordPress 5.3.

= 1.5.1 =
* Update and tested up to WordPress 5.1.

= 1.5 =
* Switched to [Customer Chat SDK](https://developers.facebook.com/docs/messenger-platform/discovery/customer-chat-plugin/sdk).
* Removed "minimized" option

= 1.4 =
* Renamed tabs "Setup" to "Required Setup" and "Options" to "Customize"
* Added new options in "Customize" tab to allow changing theme color, adding login and logout greetings and more customization.
* Deprecation notice for "minimized" option

= 1.3.2 =
* Update and tested up to WordPress 4.9.4.
* Remove unnecessary assets in admin and frontend

= 1.3.1 =
* Update and tested up to WordPress 4.9.2.

= 1.3.0 =
* Add language support for messenger customer chat. Default's to site's locale but can be changed in Misc options > Locale and Language.

= 1.2.1 =
* Fixed unable to pull plugins option data which makes other site unable to load FB SDK, thus unable to make this plugin work.

= 1.2.0 =
* Fixed nasty bug where some values are blanked when saving other values from other tabs.
* Added Ref Global Override setting which overrides all ref attribute of the customer chat plugin.
* Added Enable/Disable Facebook SDK which allows you to use your own Facebook SDK should you wish to.
* Added Change Placement of Facebook SDK which allows you to change either to include the FB SDK in the header or in the footer. Some users reported that this plugin only works when FB is either of the two. This is probably something you could try when you can’t get the customer chat plugin working on your site.
* Fixed some typo.

= 1.1.0 =
* Add support for "ref" and "minimized" attribute. Add misc functions such as "ref_prefix" and custom "FB App ID" on the embedded FB SDK of the plugin

= 1.0 =
* Basic setup to get you started and show FB's Messenger Customer Chat Plugin on your Wordpress site.
