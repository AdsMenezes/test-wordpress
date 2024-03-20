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
define( 'DB_NAME', 'mindxpst_sakata' );

/** Database username */
define( 'DB_USER', 'mindxpst_sakata' );

/** Database password */
define( 'DB_PASSWORD', 'kV5y0wN-_JhD' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Bc71N9,6Gp`K1r3sV4I^9hvBdgsPMlwhpSrG/BTt-aQU=7l#PSB9DZuI,-l|*D)c' );
define( 'SECURE_AUTH_KEY',   '.<-=7)&b8(^Ye1E9R`:/zCw^u$j>Js#JoPXhQE;QO35@r:Rd*LOvyj8Q]Oi,-6;0' );
define( 'LOGGED_IN_KEY',     '[DM3Y:y-1MTj:H8a=Bux(8:*85C{j[`7vqdbTXLx|wuMh+apSZIi4Bxbwl{QzfW&' );
define( 'NONCE_KEY',         '8rQEI)cRTqj+ ejrgP#gD$/]^rq>EEd{}JzKQv5*?wat7$GcXg?195+/ZEBML?f9' );
define( 'AUTH_SALT',         '&eNNZAhYFD#x;X3S|3Z09z[D&D9wf>vBd:uqY00wy{x|*riJcrZRY6a~S4i.!`0=' );
define( 'SECURE_AUTH_SALT',  'jj.K&<Q=*RmN?X|Ar7t0pH/s1S/ytv)p=+%d@3oec2:J/,7$Qc.rvK]kv/m`Hm<N' );
define( 'LOGGED_IN_SALT',    '4.7A/hVNgs[VurL,>o6?ske[kk+n{.dr92lTN;PjoLAwekTC:4!9TmR=P{Y`*i v' );
define( 'NONCE_SALT',        'G)e|l/ux%(CzQ9NPqa]]nIw+JG=j_^V}=(F0V-MYk&ip,S,9#kI9@4=w<`prB1dt' );
define( 'WP_CACHE_KEY_SALT', '2:BAD#t.YNO83KsW[Jq6Ot4GVgDOJ;+wk=a*6GOyn>dt(BSpsW~1s+ZubbctwGQ0' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
