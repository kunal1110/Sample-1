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
define( 'DB_NAME', 'sample-1' );

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
define( 'AUTH_KEY',         'ItP6Y_5LG{0H7[U/?m:/7demPNrLc-b$g|FpJHkU$l-vBxuQI73y5jwntPC!He;<' );
define( 'SECURE_AUTH_KEY',  '`jfG=3=[stG+!DtARgVWFW_GXcp?HIg?NEj6PZZjd 8d`*jjN3Y=jo)D`H0]3h?^' );
define( 'LOGGED_IN_KEY',    'pS.&Snj<0.g?Pw7yFZ$6-y4Fff[{w,)T_IhxC9YfNPiFx*[/E4ljCeG@4|N+as|B' );
define( 'NONCE_KEY',        'Z{R=Rmg^OPk=vf_oEj Tw~rUz~?4jSAw[jF-eIfFHfb`Q;d3Xl!:m .,f?`h00~g' );
define( 'AUTH_SALT',        '9Fgl_-dYY;<7cponls^S|ctr^5g`w$Ac=qp-=T|Xsc$=Rb6wjfoy|c<x?np^LP87' );
define( 'SECURE_AUTH_SALT', 'A?F[r$}G4>6qGE6wH>B<bn.jxSmA}[b?c+ ~[OU0,N6C&N6$z=tq4C7Au/~pS_:Z' );
define( 'LOGGED_IN_SALT',   'TpfgD~;X]KO U2gBDoq-0v@y%j$]=C{GGA16#~,1+&hQ;wDt7*^qEaJl]y.Bi_T@' );
define( 'NONCE_SALT',       'acmdkh_h>d#h %ep=z=nsvM!#uPs9S$5To6`ZWEaS7kaIPIT <>h,$jO<bB-?b)n' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
