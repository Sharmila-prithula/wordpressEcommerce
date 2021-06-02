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
define( 'DB_NAME', 'wordpressecommerce_db' );

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
define( 'AUTH_KEY',         'O]-c8<JHT9qf`B(Mkm>i~*TPtnxI$&YT{dK1.By%e`Dloi>%y&zuB:+qobg3fEST' );
define( 'SECURE_AUTH_KEY',  '}BZMk7=}RE*O?VgWpFzYiL*n<.9:BS<;b.gE<OHJ]T oCZFpBSv=k)VF`:0^;Wz*' );
define( 'LOGGED_IN_KEY',    'k=MH G<cjY=$;/%%uxj8)WAavqn3hr2!(<(mv~2O}yJFn<D^w<h~bAJJpA2#Hd4+' );
define( 'NONCE_KEY',        ']>=NsK^cLSSW@`+Yhxc-758oU*is}shpNa6x39szg<39RSjW]&FhI5i-Gc+Vg;^I' );
define( 'AUTH_SALT',        ' Kao?U.{8*APZemsq^`AM&hll4~,isK;QmQuK9@yMgEUi!S^u9k%yRHqU~V)M]M9' );
define( 'SECURE_AUTH_SALT', '%Yt #TFS<H>$Nh<hn,Z|D4!~RFMdUmlk= JLK}jvLc1 :Yl|05*~cbgcl{V?*+/;' );
define( 'LOGGED_IN_SALT',   '$*0 BS)o3z/[Kz/*9ojQ//(dmxV{x6(a=rTci5L^NZNRH~y-/{rFuFpNJ|<GnP!0' );
define( 'NONCE_SALT',       '>Y<^|.vx_dh2eYA7@I?`i}$k|djn`r[#E:;K7/?3bj/_[UVS gQ.;kp4wtHxY.9-' );

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
