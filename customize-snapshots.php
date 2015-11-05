<?php
/**
 * Plugin Name: Customize Snapshots
 * Plugin URI: https://github.com/xwp/wp-customize-snapshots
 * Description: Allow Customizer states to be drafted, and previewed with a private URL.
 * Version: 0.1
 * Author:  XWP News Corp Australia
 * Author URI: https://xwp.co/
 * License: GPLv2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: customize-snapshots
 * Domain Path: /languages
 *
 * Copyright (c) 2015 XWP (https://xwp.co/)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package CustomizeSnapshots
 */

if ( version_compare( phpversion(), '5.3', '>=' ) ) {
	require_once __DIR__ . '/instance.php';
} else {
	/**
	 * Creates an admin notice about the minimum PHP version.
	 */
	function customize_snapshots_php_version_error() {
		printf( '<div class="error"><p>%s</p></div>', esc_html__( 'Customize Snapshots plugin error: Your version of PHP is too old to run this plugin. You must be running PHP 5.3 or higher.', 'customize-snapshots' ) );
	}
	if ( defined( 'WP_CLI' ) ) {
		WP_CLI::warning( esc_html__( 'Customize Snapshots plugin error: Your PHP version is too old. You must have 5.3 or higher.', 'customize-snapshots' ) );
	} else {
		add_action( 'admin_notices', 'customize_snapshots_php_version_error' );
	}
}
