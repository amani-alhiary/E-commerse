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
define( 'DB_NAME', 'Ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'lawbs0775805798' );

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
define( 'AUTH_KEY',         '[s3h{(du /aN}Uv(xdV|O5!b`jE&NdO-sI5]TR/.h|[TrwyIEdTl9Ry$7Zh^^/2#' );
define( 'SECURE_AUTH_KEY',  'a7NEkFE}}` 9326ZWq5sAU8z Qy1OUD~aX!e!mXd|S-8.IDE+!-nA.Rx>kWF$d?i' );
define( 'LOGGED_IN_KEY',    'G^>CRir@X}n*Fd(iRu(!In?omF_Og[RAru4 f4%[iLE<Vr_-$tDA^0}VD!`yo_:%' );
define( 'NONCE_KEY',        '8>V)B|..f?q}bQ^<~69mMi2f(-!QmRF=7d|j=_,GO@72&gacG!*wc*X#!Jv<#xv:' );
define( 'AUTH_SALT',        'Qb(d*4ln2xqJI.q*o,{0@gT`wY!mS{:0!0&JoZV_%tq-C.Yx`}sZK`d=fP7w6c/A' );
define( 'SECURE_AUTH_SALT', 'ku92lAYI}_(f=r?kyt?#9{xMJ$o#BiSh[YyJ+0I^g:&li$tQ2pn;#43HaX.xSnx2' );
define( 'LOGGED_IN_SALT',   'CewNJY{B[iK}f;ZX/2$i}Nq;&`LMe-|)zMbVWsvD2:Fe2wxa[}GPqjF2&o8`.ECs' );
define( 'NONCE_SALT',       'TH5yrvR%#MYzj2xM;>3VU2&8MV|?rq.-6LMey{Rtcl2v&DwGwzk)]c(wv|cV%/N9' );

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
