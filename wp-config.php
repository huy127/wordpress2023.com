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
define( 'DB_NAME', 'wp-2023' );

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
define( 'AUTH_KEY',         'y#Te[q]@t>:t#7|78f(D j0ZT+JJiS>e{#2Mfv@S5Ve([WBbo. V|cE*jUfQFS/8' );
define( 'SECURE_AUTH_KEY',  'vM%K<gft5|JKhWp&~0{{ETbBxin2AH{k$b%DY2.]G+M1q#6_y&s,TN&>UDqY~7Ns' );
define( 'LOGGED_IN_KEY',    '!O5n[dAZgo@{f3l+|.57PZx{9=dV.0qIj@SP}LA!~&WXsQ/URR.}8QRGmZIzzp2W' );
define( 'NONCE_KEY',        '8D(=P6Mti&OtvwJPn6|l7uO1AEb-Q!W!EgRu-GcTfN/Wq<zSNNDM9[eg/*yF$f65' );
define( 'AUTH_SALT',        '*VLD~w}m:czsk+s6U%N*[EYr{2n|_TOV?dY3v~aOWk4qQ|6gI!KE8nNW)R}deMVg' );
define( 'SECURE_AUTH_SALT', 'y,8e3Dm5m%^[Ds_QNaZ~XoV]S#qP!]Vc;$X_y|0r.ebGYB) @W`DxSpoDeuz~ C1' );
define( 'LOGGED_IN_SALT',   'M>4&Jb(ZnCTV8!}$t}.:!Jprymkv-1ltz3V->h_x>@IAV9M3bmn5+LXJ[Rng<){/' );
define( 'NONCE_SALT',       'k!PyAaIjOom/~#$vh TP)LKVsIxQQTqW3H)Z}r2.W/6qDCSMYU1@HVrZ=JC-[Dl]' );

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
