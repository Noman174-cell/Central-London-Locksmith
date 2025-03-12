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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u664252469_iNKh8' );

/** Database username */
define( 'DB_USER', 'u664252469_DUR7J' );

/** Database password */
define( 'DB_PASSWORD', 'jGum7kETB5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@:+d@)KRVy9CE})jiEBv)R.6IA+9v:% uxhh^c_R>>n{3!;ERxc#}>~Q2=<go^_T' );
define( 'SECURE_AUTH_KEY',   'XDI7?>seB8;+B+^ FpI+Ghyo}^ !SG2y PuA9.6A5v3/d|<Aurl]97STNYQvy/OB' );
define( 'LOGGED_IN_KEY',     'k~RIxA)[(VBnMq.j1c)i#SlBsb(8B<XQ2r@WG+J(8j5?pH#(mbb(%=L0J>(h70ad' );
define( 'NONCE_KEY',         '!Pd8*_;C6Vl(KEk6i^ZV$z2ufyF#b{t<J=g-=GK(MY+90n#fBGw6w3c|999YO&Bd' );
define( 'AUTH_SALT',         ']lINZL%G+bZ-1O1wau]zf^Zk2_C$S2Zbe^NKel2GSdJ-]e( I;)LY&M9uHwOm)&>' );
define( 'SECURE_AUTH_SALT',  ';J=SI#G,{4fM]{J<^AD)DE,y.3rTdhJr)(Z|sN;#~q%OJx#or_J_+p_BBn3IAk7o' );
define( 'LOGGED_IN_SALT',    'HzJqGetZ5^.>095adAj[._5>ExDGW(C0|#($u EHW1P;l(&$QKb~q13ph4$(cDHY' );
define( 'NONCE_SALT',        '>GG76XE}6;$/e?Y~.R!ee,*C#b4S*3l?Kxnm:(G%husL1u?MGV5}w1<o__iKQZ;a' );
define( 'WP_CACHE_KEY_SALT', 'JfpNH#QFT#li~lwc5Ic$K412&C1KqO6t,evfacFRt-e|Y&A[QLvCX|EN 0iVC*UG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '22ade84377612686e229f8181b3d26f4' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
