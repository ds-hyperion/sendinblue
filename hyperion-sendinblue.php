<?php
/**
 * Plugin Name: Hyperion - Module Sendinblue
 * Plugin URI:
 * Description: Gestion des emails via sendinblue
 * Version: 0.1
 * Requires PHP: 8.1
 * Author: Benoit DELBOE & Grégory COLLIN
 * Author URI:
 * Licence: GPLv2
 */
add_action('admin_menu', '\Hyperion\Sendinblue\Admin\Settings::createMenu');
