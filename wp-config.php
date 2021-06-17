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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'imamul' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ikoyan52642' );

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
define( 'AUTH_KEY',         '2&Y[#bpt._r$_]18N(|?$kV2AJ$LPJjdId]Y&2e4}h_y6@guz%3h]j{:N57~kaYW' );
define( 'SECURE_AUTH_KEY',  '`Z n&KJGF4JiCeAp-@Q!ms!X@C!nqeua{rtgL4PWrPG<~zt36 1TQ%wg~W#v!UUr' );
define( 'LOGGED_IN_KEY',    '*<#JZ5hJ|wX2eo.ILdGCCV!/?5L-[e7S<I2K&Is*26Sfz0,1;bs[U~J$&f}!XrHX' );
define( 'NONCE_KEY',        'sTg1/7DpvRU2_@CN7,f4E}$Wp_ltSZ;WEy68QPtJ9pDFpW2$531,ji,BGPF$#_Of' );
define( 'AUTH_SALT',        '`)=?R#B3B5;^SFG#{P}vqxS LGY/&wk.W{^MkmZLBx=dw8~WNNh?I`p?f!-Q7fc/' );
define( 'SECURE_AUTH_SALT', '2GAY&cdYW[9j:b!?|FRdH*Yg#L0I97!:yo_^6~[MK8SWk_P,V^~bj{T,]JLtycVh' );
define( 'LOGGED_IN_SALT',   'y4:kKU^&^Vr-AP?JeH:C{zi/e%^Tpgn~_Q2)+<N_<2`bQ0|2HvQED=B@=ba,6-Qh' );
define( 'NONCE_SALT',       'p``Pyltwoy;*iWs^uZ3j*w/:Z93f]_h)A$CA&odsd`T&dT9Wy;r)<Z%oC$Frc:jZ' );

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
