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
define( 'DB_NAME', 'wp_db_pfolio' );

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
define( 'AUTH_KEY',         't-^BC=cQ]uKc&F(TZ(-|+ah!M35mlqU05H,rmF|&{Ou:,5 @co{GKTtE>Ph|ke3e' );
define( 'SECURE_AUTH_KEY',  'FUv.F;<r@$)&AO?MWfV_HD1/+]J+~C]H@j%VVW9})thH!OpV{CH0;>.n![/=J+0w' );
define( 'LOGGED_IN_KEY',    'vaWbc_)bkR3LE*N(7AY; ]J+jz@W89. >d.q$5e.|q51ZMF/AoG&x+Vo<5SS(!R:' );
define( 'NONCE_KEY',        '|}-yrst9_P_l[f)aQ a%]i<.qy-xg)6A7r1HS3~R0!3@U9>b_ms#nOBnJM%%L#va' );
define( 'AUTH_SALT',        ',|nO;EX!:iE_N-ECSjFuk*5VD!nF<+0E(hFfxwEvj5j,,glGd/Wx]/B2_~x{lQ/w' );
define( 'SECURE_AUTH_SALT', 'O[sa`4GQ+kQlAZ2d.z`Y(7)k&l^,F6N=wkb&Km,gS^@N)PT>49>c%ZHGe^uW#6Tc' );
define( 'LOGGED_IN_SALT',   '[ghXNQmZ;KBpm9~V5bW71FhmVX/O1>WmJ-7IY||x2768ynwz@/nR*2y#2,5YVuQr' );
define( 'NONCE_SALT',       'r+!oHg59ckg4E9 64xCUOn|lm)vvqD%h7OKaFBz=(5UWdQ:ln{fm~</Nf(P1l/U1' );

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
