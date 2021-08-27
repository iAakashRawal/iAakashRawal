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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'viki_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'zrx@EsO@1?6R=oOLO=:o4`aF;ii<S(RQF47I~+>a3U25hzyUt_{6558/6t$6Wg&C' );
define( 'SECURE_AUTH_KEY',  'G*WwXOUY!>oDo@j}w54]]uCs!}FE5)YuevyX:NWrWm|BYEr)t@/qW|`]X:+cwKq|' );
define( 'LOGGED_IN_KEY',    'BDJd)sBdoFg]m8%.GbfUs6|4NA-B#v;`EQog&dg3hdTfpNwrAz+<vunW6yl=@K8K' );
define( 'NONCE_KEY',        'JWWx8i,;yLcE~^%>[/x)pvJ]r0pQkZ-<uz{d]B#J!H/Oz[XkyN}Z^ILux[t9O#~^' );
define( 'AUTH_SALT',        'J>d5U)Xp$AX@@C{M}1*llqg5>vg+NHf%zl:B$s/ck?#$DmW[*~J8A~]l;BA2+JV}' );
define( 'SECURE_AUTH_SALT', 'h@,PezWt)0Nh9W[nVp ROf-F4X<`M#`J5VJe^9.1Ia_Q<%%y<PF2QL5?H/B7)=.1' );
define( 'LOGGED_IN_SALT',   'R@feV(:>S].L8I3elyN(6y.-fadiyq(N^Y)bh<K[)8Xx@w[)s$7;r~KL%`p~)h#$' );
define( 'NONCE_SALT',       'C!Sa!bRztNFp,_VCKdL&}or*H`7gvXiZ/,_#McYk2vl4`g[v>QfxeC?sH?j{xk7X' );

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
