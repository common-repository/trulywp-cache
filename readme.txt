=== TrulyWP Cache Enabler - WordPress Cache Plugin ===
Contributors: keycdn, trulywp
Tags: cache, caching, wordpress cache, wp cache, performance, gzip, webp, http2
Requires at least: 4.6
Tested up to: 4.9
Stable tag: 1.0.2
Requires PHP: 5.6.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



A lightweight caching plugin for WordPress that makes your website faster by generating static HTML files plus WebP support.



== Description ==

Note : This plugin is a fork of KeyCDN's Cache enabler plugin. It is customized to work with TrulyWP managed wordpress hosting. 

= WordPress Cache Engine =
The Cache Enabler plugin creates static HTML files and stores them on the servers disk. The web server will deliver the static HTML file and avoids the resource intensive backend processes (core, plugins and database). This WordPress cache engine will improve the performance of your website.


= Features =
* Efficient and fast disk cache engine
* Automated and/or manual clearing of the cache
* Manually purge the cache of specific pages
* Display of the actual cache size in your dashboard
* Minification of HTML and inline JavaScript
* WordPress multisite support
* Custom Post Type support
* Expiry Directive
* Support of *304 Not Modified* if the page has not modified since last cached
* WebP Support (when combined with [Optimus](https://optimus.io/en/ "Optimus"))
* Supports responsive images via srcset since WP 4.4
* Works perfectly with [Autoptimize](https://wordpress.org/plugins/autoptimize/)

> Cache Enabler is the first WP plugin to allow you to serve WebP images without JavaScript and also fully supports srcset since WP 4.4. WebP is a new image format that provides lossless and lossy compression for images on the web. WebP lossless images are [26% smaller](https://developers.google.com/speed/webp/docs/webp_lossless_alpha_study#results "webp lossless alpha study") in size compared to PNGs.


= How does the caching work? =
This plugin requires minimal setup time and allows you to easily take advantage of the benefits that come from using Wordpress caching.

The Wordpress Cache Enabler has the ability to create 2 cached files. One is plain HTML and the other version is gzipped (gzip level 9). These static files are then used to deliver content faster to your users without any database lookups or gzipping as the files are already pre-compressed.

When combined with Optimus, the Wordpress Cache Enabler allows you to easily deliver WebP images. The plugin will check your upload directory for any JPG or PNG images that have an equivalent WebP file. If there is, the URI of these image will be cached in a WebP static file by Cache Enabler. It is not required for all images to be converted to WebP when the "Create an additional cached version for WebP image support" option is enabled. This will not break any images that are not in WebP format. The plugin will deliver images that do have a WebP equivalent and will fall back to the JPG or PNG format for images that don't.


= Website =
* [TrulyWP](https://trulywp.com/ "TrulyWP website")


= System Requirements =
* PHP >=5.6
* WordPress >=4.6


= Credits =
* Inspired by [Cachify](https://wordpress.org/plugins/cachify/).
* Forked from [Cache Enabler](https://wordpress.org/plugins/cache-enabler/).


== Changelog ==

= 1.0.2 =
* Update signature info

= 1.0.1 =
* Update website and author URLs

= 1.0.0 =
* Initial Release


== Screenshots ==

1. Settings page

