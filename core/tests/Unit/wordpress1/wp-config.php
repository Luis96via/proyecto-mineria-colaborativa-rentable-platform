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
define( 'DB_NAME', 'u207221236_demotrade' );

/** Database username */
define( 'DB_USER', 'u207221236_demotrade' );

/** Database password */
define( 'DB_PASSWORD', 'Te5[d|vz^9' );

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
define( 'AUTH_KEY',         'Fs+xD#]iGb CLe1@;Spb](5=0! eSH&[v:!-I)#;MKN*+2{b1{#-Pb~,+;KS$$2b' );
define( 'SECURE_AUTH_KEY',  '!xf&bxiAbH(cY4ckc#zngY`OK98mhJ}SI8{Ih<{f{9Ix`~*GJV_(-G/`wN.sw0k{' );
define( 'LOGGED_IN_KEY',    '0F7^Va|=8XKKu|E@9J>utv;x(tHg1~-Sl]{;+oGiAo&1!=ZR?A[N0q3a0GG0/BL.' );
define( 'NONCE_KEY',        ')7t&a]-OF6ACzXhk>+G,grSe^y)3H@5x;,^?#r86AMFZKhXj(:67Ksl(9VvmgKJU' );
define( 'AUTH_SALT',        '$`Y,NB-80 W~MbwsFIWQFV(npy 9?UI>}E)<$HF--hh*lIzj$p[#c2Y:!I[s53 ^' );
define( 'SECURE_AUTH_SALT', 'k@{G(H)!|7y4;%wTrsRXL:qlRf#u?Z[wK7_uY08;rKnspw.H%ZKl6>%v3LcQLnks' );
define( 'LOGGED_IN_SALT',   'F*G#gl5oO8-KUyhr7cb,:AI)a|=ES?k3 ipal&DYF-ln!r-#I9@uX%ahbU;@d&N=' );
define( 'NONCE_SALT',       'XRfoAr~p2rG>+yXUGr)w /R*/>]-<)w31Mfs`&V-_(`J5he<^wy..{e.%,nA5ZPl' );

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
