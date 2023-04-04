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
define( 'DB_NAME', 'ctu-courses' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3dlKgyX!-fGnPw>{R|8079q%KshZa6|A(|-]7F~#oH_3OsmWuN{PX:,**OWEBREH' );
define( 'SECURE_AUTH_KEY',  'N$f;dx9g53`jnpkeTXG=Tk,Bpvzi(ME.=#2Ewt[{.Gc@JvTb XM:tdSPCL$>HJY(' );
define( 'LOGGED_IN_KEY',    '7%>-3eA&whR2*HGL$&GZfTokoP_2^7ktJqt>+hmZ8FIQo$d4Ue#^`Qkj(V^Y=)WH' );
define( 'NONCE_KEY',        'c?6cf>|2DC[]L65QfAk+9*`;s&l^ET}8c_2W#NK#ID5kTmyt6q`G<rz+aJ:OS>pf' );
define( 'AUTH_SALT',        '+ojs:,QPwN}G3[_/C?R!3nmO,})8L,w!YiPn0W8bs.GD56Z!LF#z9iWF<3pYfOIz' );
define( 'SECURE_AUTH_SALT', 'suvAhT&R0cPq-`6?;:*$F+gf|5:jf[qW=~M)[(0xx/B3S3D`8{&:4$!j!JoH8ACD' );
define( 'LOGGED_IN_SALT',   '$P?hQ;ky{Mz9BBER}p49vDFh3Ku()ZPT.~F[7?3.9pev2jz#T`>dX0=U?-h5S%CE' );
define( 'NONCE_SALT',       ';m_hC+X*q_v?y3pSEFi&`W*aJHQ53O)*mj9Pu>_T<eq;Cj}9z}h}TQf)|Zz!A!`W' );

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
