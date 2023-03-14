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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'costum_plugin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Mohcine@2003' );

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
define( 'AUTH_KEY',         'x%eVdAfa94x8lbE~@x5&3TD2_-/oPko*~ af@@rOGudty;PYu|BM=%lCiMUF`y>@' );
define( 'SECURE_AUTH_KEY',  'dkpEX<KPt-.=){za0eYbvMJ6av1T6B/AGU)F`}&u$zBxK{8v^#U/suI;04tJ[qYg' );
define( 'LOGGED_IN_KEY',    '}%iibK*xu%X>aLm[s`~ Vwhn^;;R!f8c~(SMWUh%@MP`]f==l~=6j;J3/Xgft>Oy' );
define( 'NONCE_KEY',        '@KLEy{bY&:P@z+F<b:CO-HH7sCj)HCc$M^d=Pf0i^!<|8?Tv+Q~*KI Je}urnTT|' );
define( 'AUTH_SALT',        'kKD&_lOcSrk +E7R6`JZGm&?a7`E3iL|6w(%~_*ep^3bIDgoGwY4qkgzQdv1aut6' );
define( 'SECURE_AUTH_SALT', ' @%-HLlqMP}07.FiV52MV?i(lsVoPR9>Yi3Rt&Bn;WKx@0^E2 kD2np&Px2RC1Eq' );
define( 'LOGGED_IN_SALT',   'TdZI#l[_>(?.{nm>Wmb=y19, KA{A&BR[G{gg>u&:UZj@u)$e=1K?yD/%opmF0bk' );
define( 'NONCE_SALT',       '{ta=^YU7@mzkHDyEgHOalR7 zmLNM@6iUdZj3C.,,s6Wu_#}lY<zS1EteAqAwo/a' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
