<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Zk^>8w1dvZx+-D.sX1i2d>262{?t{<Dh3nBMb6!ylsT,)G#},E+, T:s2=j}QQWm');
define('SECURE_AUTH_KEY',  '2N}&|4e=M4HFfi`*lgp%3C,mlwDNEV` FX7nx}a,sRFBiv3N-pr.r|Use5+i,+0(');
define('LOGGED_IN_KEY',    '^J{CrF06n/}yS.XsR64$,~9{_PmJ*u1a+H%V}=zVvp&^v;~NSC^KL*RmM^Q(H^%$');
define('NONCE_KEY',        '$eaz5EepkZGH-KIQUH,df-$BL|MiuoKU~z+Gv%T`+t^-NhyOH-,o8`HBZdgqJ*J)');
define('AUTH_SALT',        'dSZ|7T-u~Re&a8f]gZA<>)]h ,kuZB8Rd[[{)wDDx,d6mHN~[]n0FC>GU]*i2]nd');
define('SECURE_AUTH_SALT', '@|1/?F-Q-KhmvkteXjV+0c?+X`^Gj$%p]tp3sN3P_(M?/!T-elGyDP%O90x7 Z#/');
define('LOGGED_IN_SALT',   'ASE)N7|*d|#siDR&]-MKCoOZNf0-@Q+i;E4hXZ^6#?iOr2)F&d7|]F$dwRd|cHr%');
define('NONCE_SALT',       '>CYTm|)7ZyRg:el-z0_eyajVlU2#!SoSJB;;M7+fyr.tX|mLAnP|d7U|>%l|_%$g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-admin/setup-config.php');
require( ABSPATH . 'wp-settings.php');
