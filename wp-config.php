<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WC' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n$`5yR7uupQ/gkQ~Ux?[$tL+vy*CDyGV>)F~/ET,pI} ]FwI[iDK])$TB>fE.Ken' );
define( 'SECURE_AUTH_KEY',  'Dkai4SRe&W9ec+lL=&PIWi<pnoA#(K+)(*EmS/cG3 e(3ILm1F/!z`Nn4D<)a E!' );
define( 'LOGGED_IN_KEY',    '@.i@8@>5j)^_WspdwyrsAr$FCAHjoRxAYoy+c^{Q1ueuY8XAlE1um)f0ZMR8ksO+' );
define( 'NONCE_KEY',        '1<S-A_c!(W6JN|Rt+t$z1$X@wKXbKignVd6,o^A+iNNV3cJX6wWT><`O6 l3R:Ce' );
define( 'AUTH_SALT',        'm`j-zEk:[hw5eSLsrV# Ws]]{-?LhJON(btYKw>T+1.4Q&fJ)}%}GPFU}ogv06NP' );
define( 'SECURE_AUTH_SALT', 'GL~NG1<6 8/F_VL,}6sL5Kbba1)yHMT0mG-Kinotb_Y/k0VNB1}0c~Nb{Dzi !NR' );
define( 'LOGGED_IN_SALT',   'x-pvu?_@`1BG2*7:^|9WJK]`Y::Xj,C^0IeUZ*<RIy^V66K >!tH%a+.)9rTl?D[' );
define( 'NONCE_SALT',       'Y,Q2L(RE9>#1at0(iMzl;{&9mx`sGX&V14zyRJnL]3;(}oOW3AUE*h~KQ6.pFg[N' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
