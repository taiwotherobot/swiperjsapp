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
define( 'DB_NAME', 'administration' );

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
define( 'AUTH_KEY',         '#!!C..KqR3!|y}ral.yP`gs+`QP,>@h#5yP>79c^#?qB`BHG@pKZimt1(_6k?&]L' );
define( 'SECURE_AUTH_KEY',  'k/1dT!$K}C8j*|f_sL|3o95>jdi L3^HXnFc9::x?W82F<9sw18.v,,+</N&FYqr' );
define( 'LOGGED_IN_KEY',    'k/%2.yjvyYb=Zq3b=&8]xS2[$~pRa<f843-qPW2]b8L0K5Ur9Ht^0$>n}<&nSU{p' );
define( 'NONCE_KEY',        'Y7Id[#I_mU{unK@qK.9c)aL_{~5^(^<y!sTUC}|n0g4G^/t&d|()Ja%/b(zZZC[H' );
define( 'AUTH_SALT',        'Yh=HRXRTypu&Qmn=s.So#BFH{fA ?X8*5.!.S}y#hTePYUF7RQ-j>xQecl|#_[;d' );
define( 'SECURE_AUTH_SALT', ';Ma7p`k%_iKcM0?#$b1RvSvDL4Osznb}U~?ir0NV/+WKP6k]<A_FE{TB75G2v2$!' );
define( 'LOGGED_IN_SALT',   ',.<)>]CVHkF_`+P3xu)`ks{G( _T?YImUXpdTgR5zUz}K{Xi(]=SYlH|Y#?]$t~4' );
define( 'NONCE_SALT',       'Q7wj?MC41a C&>j8>*rVS*5y|%|FNQP~_`;`m.@`Mwa@yX[%K(X:f?[hm$D$3hwD' );

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
