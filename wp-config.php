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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resume' );

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
define( 'AUTH_KEY',         '<2qd*sly[xuxJT)S7*]. zz%tS,F=~[%J 58(e{~^7Nzz1]uoH-=_PU1.P{1|0g[' );
define( 'SECURE_AUTH_KEY',  'AWeEwUsXH?r;-JiJ06fd[]g3&uEs*1RWztRopJJF}>q8Ft,G;F+rY[3,Zz/4Ewu3' );
define( 'LOGGED_IN_KEY',    'Gn2TkR>2&)40H-g=B>3f(R=]{2|gKxtiMc,d,Z@wyI/rYC?PKWxme$CNu/}>r8W6' );
define( 'NONCE_KEY',        '0{!Trd%uMqN:M&A2eaext+cP_&cF^@2qVx|}&I@x<5Ad2J3dB%OTGY4~B,Il6ngm' );
define( 'AUTH_SALT',        'Aht %9X?X%~.g)a*;tW}1c`pL_6^=H.&2mJvk1&F%moI&=u)U&L|$p9+;w3A]6|s' );
define( 'SECURE_AUTH_SALT', 'icG%RJIZfR8cQ OPBf-U36%r/w<!svV2X?-;LmS=y1/E:1$NzEnyZjRU>u7BV4Lz' );
define( 'LOGGED_IN_SALT',   'g&;g#/rUSFk,~_B&0f~tr1sYd[/R1sJA8VWVN#8YROZ<=R.+{wy/}2[i|osD@&Si' );
define( 'NONCE_SALT',       ' >+_1dSvyuW?AR^gC*9 KhceNtBwq>JyEz+hQYVl`d{$>3$2G=bmwe#>fI^XN4l=' );

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
