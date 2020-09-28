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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1f$x8(#O1=B<b&dd+8Ecu*-o]&|<[.{mqu2a;9U}-~>)ypY|=}]_)oEP -1Di/gm' );
define( 'SECURE_AUTH_KEY',  'ukA&9di4Ug*WxRuY-8mb+OBxSExQS `k.! .!x([JDNy0s>G{oX8XXvZJ/wO80Tf' );
define( 'LOGGED_IN_KEY',    '6yKSN_J7FphF%5F06iV6/n Lhf>k+qcX>HNd.]XyUrc#=zQ<S.d#RyNLsPFUs9t5' );
define( 'NONCE_KEY',        '=G.;;[Iqkxfi~e90$+[:qW4{L%y, B*~c.5/QWDDqA?VBvJ&S=jz35&l3JDu~Yv1' );
define( 'AUTH_SALT',        '<A1?nS}4O#$bSe6r>Q?)=O~7[VsTANtC+hJWJa!{a32I8<H)d0GlisG|A.y&qW~H' );
define( 'SECURE_AUTH_SALT', '.phZsL1h4#5{w84%5Fz@#}2WO ~48$DI/I;+Vp/]d,N<n|K)L7VJ%Cj`2Q)c (*a' );
define( 'LOGGED_IN_SALT',   'W}6{NH(?T{z0-6{6/L0w}TiRRT6t;g7H%p;k59+)tNRNmZB0P)=qt*Neqq/;m_~B' );
define( 'NONCE_SALT',       'RT%m>I,E#1_NW|TR,y.+4eAGfO)Y}zK] )#]]xDgj2*Rguctna{==dsOf)7*u) T' );

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
