<?php
/**
 * Plugin Name:          WooCommerce Envio Fácil
 * Plugin URI:           https://github.com/moacirbrg/woocommerce-enviofacil
 * Description:          Adds Envio Fácil shipping methods to WooCommerce
 * Author:               Moacir Braga
 * Version:              0.1.1
 * License:              GPLv2 or later
 * Text Domain:          woocommerce-enviofacil
 * Domain Path:          /languages
 * WC requires at least: 4.6.0
 * WC tested up to:      4.9.8
 *
 * Copyright (C) 2018  Moacir Braga
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/gpl-2.0.txt>.
 *
 * @package WooCommerce_EnvioFacil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'WC_ENVIOFACIL_PLUGIN_FILE', __FILE__ );
define( 'WC_ENVIOFACIL_DOMAIN', 'woocommerce-enviofacil' );

if ( ! class_exists( 'WC_EnvioFacil' ) ) {
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		include_once dirname( __FILE__ ) . '/includes/class-wc-enviofacil.php';
		add_action( 'woocommerce_shipping_init', array( 'WC_EnvioFacil', 'init' ) );
	}
}
