<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'abilito' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'BV:dKv>J6v51ff8G4tKlkvO=-xZ-hSAY@4IVS`gO-Zw_XSD#d47HMZe7G)I@3,zn' );
define( 'SECURE_AUTH_KEY',  '3}>-b$$(}YnM-YihCQbaBa8t0E89ERqd/*?/=HM.>{O;%K1=e=T7^3*n0ON[_k.h' );
define( 'LOGGED_IN_KEY',    'CuZ`pJcucFiYWu<4(Q;XEOtprU+lG:P=4f4i1sE{4b>|1,<wi*>g&oUti]c~SPEb' );
define( 'NONCE_KEY',        '[cL^REL!{Y/Q{<-#J!r/((`%NLxR)f3-+ZM$)SVRW;Gq?*ZoJ^vI-VNP7^ &v8~x' );
define( 'AUTH_SALT',        'x{P`l8P$8gBop`q*Vh/b&#WL{N5IT*Ex/T[G}7d>C;`V)3Tj3M8DR$.=?X[ H:]g' );
define( 'SECURE_AUTH_SALT', '3-Jc+UceSr#d<8ty#jjT*QMpA:W~r5b+kAW(uKA#4:fLf #|3nOC(~ua`n;ungMQ' );
define( 'LOGGED_IN_SALT',   '>)}PX0J2zYg`beo3)s3H?3%@H*/eNn(%iXM/0hH%|^@O}@}H-5ZCJVCqf 6cu@A(' );
define( 'NONCE_SALT',       'OUPA~vPe2lz<B[mScHF2B;K1->3h(CDiM4!%|L1COJz ey3IV+=57}S&~>6V _aR' );

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
