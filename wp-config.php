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
define( 'DB_NAME', 'Hanrayin_Dzayn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'yVxzE4WIlM0520ou' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          '%;]G%+rFCHDwSd@%bJ9cY.R(iKyQ1Tfcbi:#MSXZG&5b{B7msYjB20F`cmBER3mW' );
define( 'SECURE_AUTH_KEY',   'V/jbxN*%X<cL<NSvnwETpn*r{Ih45K]k!D-mtyXhcie;=tc,.b@J{UEC![~x2 z}' );
define( 'LOGGED_IN_KEY',     '~F|A#@ZUWQ.&#%bDdTa2zp~<7Q0*F;4F:3:]XhD=5%Y,3^fSyb8)|9b$>ml4$^KA' );
define( 'NONCE_KEY',         'w}#44QQH|#B3*5ZUS0n]Enju._-)/c)A%pO4[2x$:Wccv%+kCmtXr5774EThHsD{' );
define( 'AUTH_SALT',         'N;>).5.unbnCd^uK)3gS-]j;*P8wxB-Gn_n-=6%K(fp|S5|$)Z8$mWCgB^7jE>4q' );
define( 'SECURE_AUTH_SALT',  'svT H<0bv&.[o8DBX6J%Rbx,+tXe`$Ool)gSiknNx9q5Ie`yPusRp>#D0PQ9j8sx' );
define( 'LOGGED_IN_SALT',    'Q(e)a5J_<R?.M{7}~@lFbXmNQCC*^#dD RSpIjQ46+C787,bBCJNIwM)1G0aVG>8' );
define( 'NONCE_SALT',        '*p)q;I1H}NGgQ?ef_zdiUF^j-m]fy3mR]Jh+;bx||hnK|lBb5n~MBuTgixwPH?d^' );
define( 'WP_CACHE_KEY_SALT', '_W~P#0{!S2+>mz#Wblc[F`1|DumD=8nFBE=?J5w.zs$6ZPub.ogxE!Rn{f#d&),<' );


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
