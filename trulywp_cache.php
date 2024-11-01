<?php
/*
Plugin Name: TrulyWP Cache
Text Domain: trulywp-cache
Description: Simple and fast WordPress disk caching plugin.
Author: TrulyWP, KeyCDN, Sergej Müller
Author URI: https://trulywp.com
License: GPLv2 or later
Version: 1.0.2
*/

/*
Copyright (C)  2018 TrulyWP
Copyright (C)  2017 KeyCDN
Copyright (C)  2015 Sergej Müller

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/


// exit
defined('ABSPATH') OR exit;


// constants
define('TRULYWP_CE_FILE', __FILE__);
define('TRULYWP_CE_DIR', dirname(__FILE__));
define('TRULYWP_CE_BASE', plugin_basename(__FILE__));
define('TRULYWP_CE_CACHE_DIR', WP_CONTENT_DIR. '/cache/trulywp-cache');
define('TRULYWP_CE_MIN_WP', '4.1');

// hooks
add_action(
    'plugins_loaded',
    array(
        'TrulyWP_Cache_Enabler',
        'instance'
    )
);
register_activation_hook(
    __FILE__,
    array(
        'TrulyWP_Cache_Enabler',
        'on_activation'
    )
);
register_deactivation_hook(
    __FILE__,
    array(
        'TrulyWP_Cache_Enabler',
        'on_deactivation'
    )
);
register_uninstall_hook(
    __FILE__,
    array(
        'TrulyWP_Cache_Enabler',
        'on_uninstall'
    )
);


// autoload register
spl_autoload_register('twp_cache_autoload');

// autoload function
function twp_cache_autoload($class) {
    if ( in_array($class, array('TrulyWP_Cache_Enabler', 'TrulyWP_Cache_Enabler_Disk')) ) {
        require_once(
            sprintf(
                '%s/inc/%s.class.php',
                TRULYWP_CE_DIR,
                strtolower($class)
            )
        );
    }
}
