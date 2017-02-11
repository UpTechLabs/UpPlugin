<?php
/**
 * UpPlugin - WordPress Plugin Boilerplate
 *
 * @package         UpTechLabs\UpPlugin
 * @author          hellofromTonya
 * @license         GPL-2.0+
 * @link            https://github.com/UpTechLabs/UpPlugin
 *
 * @wordpress-plugin
 * Plugin Name:     UpPlugin
 * Plugin URI:      https://github.com/UpTechLabs/UpPlugin
 * Description:     This plugin is merely a boilerplate for you to start building your own custom plugin.
 * Version:         1.0.0
 * Author:          hellofromTonya
 * Author URI:      https://UpTechLabs.io
 * Text Domain:     upplugin
 * Requires WP:     4.7
 * Requires PHP:    5.5
 */

/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
namespace UpTechLabs\UpPlugin;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Oh, silly, there's nothing to see here." );
}

define( 'UPPLUGIN_PLUGIN', __FILE__ );
define( 'UPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'UPPLUGIN_URL', $plugin_url );
define( 'UPPLUGIN_TEXT_DOMAIN', 'collapsible_content' );

include( __DIR__ . '/src/class-plugin.php' );

new Plugin();