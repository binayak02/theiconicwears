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
define( 'DB_NAME', 'theiconicwears_db' );

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
define( 'AUTH_KEY',         'h2zt/Ar7iiUUs|v8yY;u~X8unrTMJ@s|H2A5M(4Qe5d+)&d}2a{/}k-KutSp<:BO' );
define( 'SECURE_AUTH_KEY',  'UgI|gn4jo`OT 8YgRhP,(,N)i]o<odjoWNea+,Q`Vl{WSdqdPT~(bLHr;Rr>j:54' );
define( 'LOGGED_IN_KEY',    'M&Vv`^2#$0Ji8s%aHzpyK28/skclTKdjyu,ZGM|/r5QV4Kz*;},>aoM02&T-M)_B' );
define( 'NONCE_KEY',        '#_Ti>+>Oz?UhpjY3KPugwwW#q@7jGg_I6HS6Alg;[Ad{_-EQ!<dJ(4=RN CNVhGY' );
define( 'AUTH_SALT',        ']5zbo@qX4niPwp1(Wpe(x_F=}3}(plsb#/EQh>UX8:c?0fAqPiiiL>f4TJh1g?^c' );
define( 'SECURE_AUTH_SALT', '=tRC/~}.NCF15*tt OZ3S:8d9yL#j5.oP;gj 0mXD}2z?$E@e=hy>8YBQSmt(]0}' );
define( 'LOGGED_IN_SALT',   'K->j<bn$Qd;*XR:J^A+]CQ@4Lpqc`i`^e&5.E{HOam,r)Rg%d`LX Jc*:4yR0z(%' );
define( 'NONCE_SALT',       '7O|daa.m=yK8tF33=XQ.hZh;[(yf!i;.>|WT  Rbn_o!Pti$|8GVvR}~STmoQkkY' );

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
