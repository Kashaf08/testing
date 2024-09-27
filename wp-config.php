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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'NXT1nGN2[rkKe_2X/JJmRQWg=3nQ?lv;ehbiVn8u#7hY_[Ql:k6s#$Q08<>d+z6!' );
define( 'SECURE_AUTH_KEY',  'M;M2=Ss pmLm.2knft<,8b3imq5)h$Y.E?@>m`WA3c9mg2O=)q;EH9(tcV0,}`C^' );
define( 'LOGGED_IN_KEY',    'v<Co1k<27L@Q:2ChLg!E0soPU{7~}?)XSyFSK+~7(f(a/*.J6:zmh^Yhk3DZu6C#' );
define( 'NONCE_KEY',        '`7-hqKzA.%~R Xdxv <&Xfhj}Uw7NP$G4Rtz7>m,4_wZk>qhG(ZWF+&Qz<|A6aID' );
define( 'AUTH_SALT',        '|$yZ~dz~3+. mkE5){S$C |cwJ7#O,QgYQI%2@cFy4V]k.V6Lvv_V=1Tr0kX;;C*' );
define( 'SECURE_AUTH_SALT', '?I+3Q<|ep3& ^-}!5STrQ$R;dO}H);c=,5z) ^b8^Mz,j4h]ym2W%q0oBs<p}}[1' );
define( 'LOGGED_IN_SALT',   '^z>Nxv6::sKz,`,PtP4nCeo4Gmo9hh-Cj36|qxRa!qGk,>CTrQI3I{-vE{|`OC1o' );
define( 'NONCE_SALT',       ' l>u;q>#F[E9Rv$GX3uW:[u0c}XY1;wL*%znk4G|-ysa/Srj0jG~d8^%8iNQ~MJg' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
