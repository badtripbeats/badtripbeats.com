<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'badtripbeats_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',!<H-]GEqRLen); eFi:^AX?+L(b:/ruNg*hq~1X:l}T{ ,&fy-Di%?z+M|yOkVG' );
define( 'SECURE_AUTH_KEY',  '~Rk%7y*TEs{%=m*iQ/(.nxN:C9Scr)DID0!:YvYx#;+nekMHu~Vhwp7? cB#HP;M' );
define( 'LOGGED_IN_KEY',    ';*N|QFV0sZh`]#1B/ =;uH8qv)Ws;X9AerVE0h,bF-~`!^eyzu]}X;}$,4]%9J8F' );
define( 'NONCE_KEY',        'p_K`.}k2`me`N2lqT_)LrET]!h;>Vdl;cQ!*q%YEV5gmx->I|;M=wGPm qts!Tz-' );
define( 'AUTH_SALT',        'T zQg&Ixb5zLzx&hAXIt]YsGu[}8|#%AMBl_L7naPV7Aiay7qm7[ }/`4ppq-3U:' );
define( 'SECURE_AUTH_SALT', 'jC.{DadlNnBh?aBov{[[Q3{k^%7T`V5avhza]:8/&N(%|98S!D_&<f.~2*:E$*iQ' );
define( 'LOGGED_IN_SALT',   'ugN(swd4K4fdtS39Ct|qb.5c2X%oMu6!<wSFfE; T)a_B(%V5a*3{F=@?,hEe?b ' );
define( 'NONCE_SALT',       'I?XjYMEy(Eq{7q(lxd4JVto$Y@f+pHbu7V%_v;tRq:y,UXk#<Uu*v#2Kh^-nqhN0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
