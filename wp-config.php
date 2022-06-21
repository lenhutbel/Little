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
define( 'DB_NAME', 'lenhutbel_little' );

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
define( 'AUTH_KEY',         'nkUL!:[PEhfS5]:%_A.=?!sNfRF-U`OR];G:ae>#)9Ix:iqv05DWf%ArYx}J|b~t' );
define( 'SECURE_AUTH_KEY',  '-T w=abYHUxAOw3_cBxiqRN]Jq-z<<r`?rCAEwdTvAZ M|P5lPh))Y|>(U6gy!w=' );
define( 'LOGGED_IN_KEY',    ';piwr,p|&;{WCKL5gp_z<^i@x7H1S[$e-RQ&_a-GDpuXi`l&_JK(V[KKc/mDC7X=' );
define( 'NONCE_KEY',        '1U+Q5=OsVTHGbkF1nY<56)w+2hti9w@bFzowi|ijQHeU_]@P0 3;oe[s(!|JP5I5' );
define( 'AUTH_SALT',        '(O~t Q:l9zrhHpAu_R.>JUr*ti//z=kj-p!pT-$E0u!pusQj03gZyThGVNnYbEa{' );
define( 'SECURE_AUTH_SALT', 'u@{/^:,W?%ed&,-*@?sv!zk24pOJdEWj>D<KTmQ;60it9Id{bM/%b*2 U8T}a6_|' );
define( 'LOGGED_IN_SALT',   '!5)!1#!UB))9NnF>nX5`P.}-C13LvR>i@XIB}8Tsaa.ExT$#{bYuS{N7_xkouAM~' );
define( 'NONCE_SALT',       'S3*kI>Yb~4 vj3^B?@L5yB:Ti=B|~caP)l >~_%!z2qHZ/ylC7k.&LJYSn[(5^4{' );

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
