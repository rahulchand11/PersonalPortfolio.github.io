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
define( 'DB_NAME', 'portfolio1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'y4=WNp}O38@Q{H{v0[069~Hz8lGyHp-kX42`;5P&@fIFoV)D~aHzJzTE5]vO2MGH' );
define( 'SECURE_AUTH_KEY',  'fp)?E%N 8M!>aB)~EnP(&0}kB7r+%tk<x.`~ zq}?Qf(Whn;3;TUMWfNG{kiN1`t' );
define( 'LOGGED_IN_KEY',    '69N!) bm&<L,BW<LjeegX3kR5>x()LHcr:uDO=ox._p[9k I_~HaAp3$O>SYd$8Z' );
define( 'NONCE_KEY',        '1~TNR=)IrP@(QbnP)Y$F.`g=3 ,}#||9Qpl{^RKq?yZh{[k5pzole@8IC.nOpnLP' );
define( 'AUTH_SALT',        '@DD.H)GofD5RE=JOH}Uw2O=VG&uYVf|^*$as/ufIuJ>UomstI5lwK{*Zq^&&#) U' );
define( 'SECURE_AUTH_SALT', '8uN&wIcb~`_)0t64Rz#%y>kRL!:pE0ng K2:/-gwyw5m+0og+D286[[%%-NieCYR' );
define( 'LOGGED_IN_SALT',   '@_6fdNxgQH<WPF$iv`YjJ`&0{%Rw6?{[!~;=OY-2{R.hmxf]w]CDI/pq4A?-a PP' );
define( 'NONCE_SALT',       '),p=c**Am[SafUglEAhb?VA?Bb2%HPkqUKyV.x.zbbDMpkOeC4<Hn[2/{2DJHjZ#' );

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
