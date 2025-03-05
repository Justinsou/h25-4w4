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
define( 'DB_NAME', '4w4' );

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
define( 'AUTH_KEY',         '<H5*n1=K#%HWrYa^BfQ:yqcy*j,L@Tyia=PS4GMe-9_YUg-us.@7))O(?HLgQgyO' );
define( 'SECURE_AUTH_KEY',  '{5sT7NkRr7[U0Fg}eMB;7CSeyV9)H0zl2k|k+%u_xnP5nt`L|mSi&25L-n!b:FA7' );
define( 'LOGGED_IN_KEY',    '5na#`-crLe3PW^u#;uZ@;j5T1/rDNz#Sj#1t> ^GYQ5{FNw90(g4F@?=#Hmb*okk' );
define( 'NONCE_KEY',        '@xwJqRsc;MsZ0n?ky}Ejr3EsZT?6S#0eiwaZ0%M~m<{ORS+ne<9sn*O#xP[&LVf`' );
define( 'AUTH_SALT',        's5d4fM;7JX5j%%%^_bLa30P0RH.E:bC]_?WWxx0_97d.3JzUPqzFSaxxLvg=omnh' );
define( 'SECURE_AUTH_SALT', 'J7j9k.2][NA+8F-sg^ V?_k(~MbO~IlQB<sa1QcUnM-xBCRfGk>9;,cL/.[oAV&v' );
define( 'LOGGED_IN_SALT',   'iOq1Jr`b=YB^o~(QB[Q H:B>~wH }%O-5ZE[BZR/arnvd4>6d#E4vy8&z)j%1`eV' );
define( 'NONCE_SALT',       '/$w|=H0tuDww)T7nGj82(1p*-;/4/$oQV] 7(N$LBDJ)KmHQ_6-Q<78@<S:!jpbx' );

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
define( 'WP_DEBUG', true );
define ( 'WP_post_REVISION', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
