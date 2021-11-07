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
define( 'DB_NAME', 'déco' );

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
define( 'AUTH_KEY',         '+3mHg#W+Gq*v%z=/t[TR87V!3LxMlnMCEI.VZHS:0_FnE#(b4(5Jy[z~erg>d$be' );
define( 'SECURE_AUTH_KEY',  'f/hQl:sd<4%QJMpt}w8YZ|1MD2#No]|^#Z) {l(K_d#WG+Q;%oszRueJvxOe8!AB' );
define( 'LOGGED_IN_KEY',    'f$RbU Y#?r;ZL|<Y_e,83UE2!g6wG):SdZnXEGnlN6R8x;.eKl6LCC=Mzdb)WJsD' );
define( 'NONCE_KEY',        'OlXpL5KRGWu/|hwo-np*U8{TajQ@S:wh@;Yp^qNqrsj*3OAg)|FE~e4.JHfSRR??' );
define( 'AUTH_SALT',        'Hn=1/0-RI](Q^[`erBOiw8*^yQcq!vX*-_wZ@?e{^c]4Nhf92*@zJQC&*I9)^jyK' );
define( 'SECURE_AUTH_SALT', '0.W=O?E1[p5)ZRXB;6,QKZ}mOHZ*.Z ?+3(U,h|UVGM!,wE6ck<]6t5-J|<c5Z%`' );
define( 'LOGGED_IN_SALT',   'E(AtH;%EfCC5{GXk12qqceM q N(I7$e/5,` 1F/>VzM{s[:jh-1U[Md^Un$JXQk' );
define( 'NONCE_SALT',       '_7d$W_[CFUN]Fk3Y)^wq6h,`vh1][l0*2$gDzh{%N~uM+BMzJPydXH4*^`$7Hl~t' );

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
define('FS_METHOD', 'direct');