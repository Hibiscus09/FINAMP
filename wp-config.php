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
define( 'DB_NAME', 'finamp' );

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
define( 'AUTH_KEY',         'T  DVVlrG|Cy(fkQ%2p*zH0xHH%(3t(>=W2pB}tRigkG0LWgp)CEEF%0Z>2AQm]I' );
define( 'SECURE_AUTH_KEY',  '@.6n^ gI;{bCVbZo4AwP{zBS4pkGju/IykU]#S8iuorSn6hwNx<x!uXQPg_Ii$vN' );
define( 'LOGGED_IN_KEY',    '5T*$lAvq6XhB:zGdjU0ax_#(`1|_Txgds&gKM+wHU}cJtZ4]r[P7e|TNG&-` xh2' );
define( 'NONCE_KEY',        'Fh*NLEx?SKxMTtv^hVy:W+l|4E!}x^ii19c)Kchkh5. y)WpaQ/qm8@t}&qvBNIq' );
define( 'AUTH_SALT',        '5zQBs90MO~@Z*){2v!U}ogt[quCL`KdnsgL=I0k)EXGlC{3PLtH`)j~q=za^sajc' );
define( 'SECURE_AUTH_SALT', 'Vxo_S/]aRZD0=nIf`vr-AUi*)B_!IAZ;}u|(/rK3/ky4` 6 :PXTkoPme2|4IFlB' );
define( 'LOGGED_IN_SALT',   'AU7>(E:Q)kV2G7nDuEy]KzpC~I=^u^sF.Aa{>Z7O04N3M6:)*$tdnY?sO^GOT=AI' );
define( 'NONCE_SALT',       ')t^%S?4o( R2Nm?6(fWvG+@%/#!DkTb>u((P%KU.sBaw-W`Wj{-f<yrKSw8rD4<t' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

@ini_set('upload_max_size' , '256M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
