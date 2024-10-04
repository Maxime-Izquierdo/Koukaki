<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         'FG}#y9k[w#*gHWNlwxr][4=Fs~J~+uN4{^,$Ihf^y75s{v]W$J]_e}Ho)F^gfChf' );
define( 'SECURE_AUTH_KEY',  'q+1b#B6Fm/B B.epc,+._~+;o!.VW4bpW,xW}VT[.e,b5`GD*UeB}7Z.<Ci7?Gbx' );
define( 'LOGGED_IN_KEY',    'y3lr!N5J(nKR*19oP|()nxmRP4z=lC;wgq2IJ?k.S03%;%BmYF8<0T[/Hg:KIAR2' );
define( 'NONCE_KEY',        'RA00FUL~w%(J#?;$G}fd=9 jM{-q_/O=ty#@an?7sL@y$]b|4-=kJG=A~(bf~s)%' );
define( 'AUTH_SALT',        'hu4X6MxKfS7Qg2,~*)]S:@-7=#0#@J&SixZVo[p@7!wV5H9bObL> l2<)RV,@z=y' );
define( 'SECURE_AUTH_SALT', 'vfRqYIJih5b;uw;BU^r+~I`86._bNz`k&P;mF/U2b@w%#{_4-`ueoH}0!(q-z}cd' );
define( 'LOGGED_IN_SALT',   'I@ ,[(f7R$1sI{3d5T9k{q~ueXYG`q#0cg9D<^#7%s^&k(_fK:9]5#1Do/sS9=4#' );
define( 'NONCE_SALT',       '4yhQtp)EixMa4Zn]~Eqz6Pt){d_/)rxvoqh ;9vB{TahbA CX2[Cm9?[K+@9RWZv' );

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
