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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'acs3%f1;Jg&:v-G(vk$F 74>a(Vmi,bzR:$u]SBmL]ZDztnVx-ygcnd QHz#_x_e' );
define( 'SECURE_AUTH_KEY',  'RjIOAISauwIq?]TS|Xx,h+]?%;cGl4gS-L-w`@__mS12ExDFDyszo|_7SGTb07Z.' );
define( 'LOGGED_IN_KEY',    'L;CR89M{2D[+r7)u vrSC~~^uZl$j!IMtj!Vp _^F}ZuN@mhETI:E5?mRQwU@FHo' );
define( 'NONCE_KEY',        '!/XNGF6[%46C]O&=+x-,C|G#O2%+k:)Z{IFI>`]Ud+<*v)wL3FH*|HFW+F;|PWK_' );
define( 'AUTH_SALT',        'X;j;ddKmyPgar8ZE0y#JwYEz8GN7-5? (t:-Dy<2!1E>2zRs2@1dADM_!_s#r0er' );
define( 'SECURE_AUTH_SALT', '9:xR&arl]`s7>Os@2n3Q8@fD|y6q=%orM%5MQ1;]c16~[J:XcqO,LD*qWqZY?9XJ' );
define( 'LOGGED_IN_SALT',   'O8BJcsHi&-RQzdU7C]l7~{-K/g7e/x?S #a3IwW?u.20Kp*fPiqbKXBR?/i~[e/[' );
define( 'NONCE_SALT',       'I5u,a3:|=%I!iy?r}]sb<Mx;FjQhc_4lqcqi29L f!So,nt7KY)GGmBUXEi sv*x' );

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
