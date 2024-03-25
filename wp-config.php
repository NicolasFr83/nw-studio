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
define( 'DB_NAME', 'nw_studio' );

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
define( 'AUTH_KEY',         '.m-s ?]oNa:*;Ay}Xt;4Z1@B0JXaXBOa2 fM3Z_#Wt7Fuq?xv $|pjr.rbeIa02A' );
define( 'SECURE_AUTH_KEY',  'cbDw;HBzB}hPQfJp.@({.8iv|xe$^HD7z`5` )&,*J6]2/}b(jEcssU8bylIm=t;' );
define( 'LOGGED_IN_KEY',    '`gSqzRFrf7<I,sbM(BHYABu1it<Y@4ke9Zah/Rb,:3P. bky+RfAXv& 0]zuhQWW' );
define( 'NONCE_KEY',        '%Jd+7$9.mKmDCQ?Iu}p})LHw^@Rg]/;ghEJSC.N+M_B&p2g}{E`BCDQ,&Y-rL.+P' );
define( 'AUTH_SALT',        'vvP.kiCGgu*f%nF,^JRV=BN/+dv- V[As4vi~fI/D)sxb*0<F2<8A!L3h&S?}F]M' );
define( 'SECURE_AUTH_SALT', 'dEf9ASjHc34M+$v]$+^%!RAq^f wo=x$nHPa^U,PSCo> k/-EY?5FCypd.!nNd=.' );
define( 'LOGGED_IN_SALT',   'R]2<oXCtgVJ&]O,[j3]_,m]FMb^<jPY(e!}QYOH3gv57NWPOXF(3Y*/Id1w<i {}' );
define( 'NONCE_SALT',       '`9{HWAez}xtwkOIa,aD^5OZ8szWd97hY<T%lg>v)2Z,2C3nVW!E86BY yXYXp:.R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nwswp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
