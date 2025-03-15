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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'R1l :P/J_CZ2p^Pmf*,WHA#`/Sm(R@>fmB_~3xd|ti]d?akv-zW}$N|/&ym/3}r0' );
define( 'SECURE_AUTH_KEY',   'CGP~+t35TLvYar)$$03<QE%`8)6TK~oN)^tXdip>I^540?;SC_8+RJ)|bt*5.YD*' );
define( 'LOGGED_IN_KEY',     'B31EcA%-lD!29x8|i (Mq>|pz:TK6n;=.#RZ<I /x]mbe=lf-R>KmbVKtN2!4@L0' );
define( 'NONCE_KEY',         '7&,jUe+vAnB2ijs;sPX5>,B-5Ou#&IX2P1&8]uLZ/bS$I#jBfs20+c:3100aafj}' );
define( 'AUTH_SALT',         'HCo||Va$*JArVroE_{9<#yzIsUpJLPXb,#urA(+y8j3V6#g&^x3-b6bJ~Ik:,ljJ' );
define( 'SECURE_AUTH_SALT',  '6b,7]<w[78RoeENbpb?7obh7xS+|u.H&SfxnYVlp}Ldk@BlhU$!w%iA9Ay4Pp4hh' );
define( 'LOGGED_IN_SALT',    'gfB$g{+P5/Cpwb|X!~R4n:J7rwe9-_U>j_Urxlrbz.3;?RK&,E/<MP#. v:}+}dQ' );
define( 'NONCE_SALT',        'Lhjt-.Nsmjc7R5(Kn1K;cHtJWv!],(2 U1D@bmko|5)lpD>p.pG$R[Membl4Lt7#' );
define( 'WP_CACHE_KEY_SALT', 'p$A|2z;akmU_4%r7n46$ku#v&J]t]*qEljXt_~[y:fB:hPcTjPE69m 8`o?V+!8S' );


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
