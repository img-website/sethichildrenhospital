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
define( 'DB_NAME', 'sethichildrenhospital' );

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
define( 'AUTH_KEY',         '*r~Yb:Y38@AeAwDt/fljD904plA*ZWCBcP[C6pB,T9,Y-aE>NgQ8xLc-kPJe[`^f' );
define( 'SECURE_AUTH_KEY',  '#glS:[ZE<pl2NOqB.4R1AYuaO9CNRC*mK^qX07t+H{=^_&x;klC2z+wtWT<( 9Yx' );
define( 'LOGGED_IN_KEY',    ')H*Oe&}9]Ojc}T/{s&hx)o(a5Aa&>A0t!uCqq5*p)w=zkQn<l /cys0p3!iln/,!' );
define( 'NONCE_KEY',        '<VOW*K69$TIW|RJ7j-u/3D!]d^Di.suW-NFVguBOswd$V9vTq}v%^3q-Dz}x,WZV' );
define( 'AUTH_SALT',        ' 5f},-A<(2,+fhgkT$Y0QdLVN?zVb0zhtkhsX =&k%6b.$7o[S)m9x7.q9h!73`q' );
define( 'SECURE_AUTH_SALT', 'AR6=c!aiTC-9ta6k~ti>X$_yY((5z&5`5#?Il,.n#G`jU2tcBf~41Zv(WO:<@rE2' );
define( 'LOGGED_IN_SALT',   'C| JifV&u9qhl[4Y*8g`VQxD~X7R=qkhn3mQZB|999V*NPG6;2o3~gb&7/.j8n4&' );
define( 'NONCE_SALT',       'oJEFu.)#Qw}~XF[jW(*CPjwj$^(9=7)Jtpb7/=<H(1#d%mlPt*R&Fxzi-6{tUi-g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'sch_';

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
