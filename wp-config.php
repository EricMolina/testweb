<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TestWeb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i}vprGxnuc5?8z`@;?L7S0w2^/;(4AEC(K`$m0>7]& FnkDT.[<h(2&BsEh^,$j&' );
define( 'SECURE_AUTH_KEY',  'M|K{0N%w0R>[b{.M0&tXuIp7n4q,bGH8V0ALA/sqAcme>=TPaQxHE>tE)YI7|p3m' );
define( 'LOGGED_IN_KEY',    'cwdP8b4]KYN0WmDhV:cWpde$z&n=*FGx0<$(gD2S&6,)4,-&d:c  =vaCLb^#hs|' );
define( 'NONCE_KEY',        'i{;`kyx*$~T-W~[JSE&J-ua1gCD&$4;0oJq|M*m|yHl]f.]V$R/Z32wR S|4!k@&' );
define( 'AUTH_SALT',        'kXLn #4WwTEKH>$s8Q|M5~M0tkvkbFR{ier-j}X{-z6a7KtmGMT?jeL)/(W~OYkv' );
define( 'SECURE_AUTH_SALT', 'n&`C8]<@X./WIrSO>tg>`B`E|1{;3h/3X:EKOhOp&kj0GP@.,o00([m2%s7}7vg+' );
define( 'LOGGED_IN_SALT',   '5O<26eJ .vpeJRH43iuhucPHm_@.>v,ho/-S-=$SgH1+`WVz0KDGxlI8:=>_Dqs8' );
define( 'NONCE_SALT',       '(7Ig3/dHoR!U$IF.!y|Po2*T>,>cVdH#mcICLnE}fhef/F^m`#udS|2NIV/k0^!W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
