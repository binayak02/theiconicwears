<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', false ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', false ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'unaux_27000251_231' );

/** MySQL database username */
define( 'DB_USER', '27000251_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '8pVSpe89]-' );

/** MySQL hostname */
define( 'DB_HOST', 'sql301.byetcluster.com' );

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
define( 'AUTH_KEY',         '6oy2wr4khqdgefsndrisnibalrn7lg6d3dhntbaid5jkixnrgw7z98obomglcitn' );
define( 'SECURE_AUTH_KEY',  'lxtmvotmpuuzjun1rlq3lefwv7dlbenxe0exncztnazvjdtrsmnhbtg7wjrtxaap' );
define( 'LOGGED_IN_KEY',    'n5dcczp2efqq5dz33hzuc5zmqqxb44esgity25izf94qkhvgvmqfnct5jvyyguoo' );
define( 'NONCE_KEY',        'uijyqt2r4ekwpcpg3ysceue2u0a78ro0jfwnj5qh8ryuz6dpa1hmsvmizhwzbuh8' );
define( 'AUTH_SALT',        'nflaseu8pkxtqib5dspjawq09ve8vzr617ttg738tpxiho3bnzv4phnjemjt2jwd' );
define( 'SECURE_AUTH_SALT', 'dwwmo9udaypv9lpgxqqnqgx21ykohyaldzkiyworueo40f7p5kpnjxelbgcmromz' );
define( 'LOGGED_IN_SALT',   'z3ijkxfu3jo7gldkbaguknprech7o1qadukb6svxast9dozdzj5jeob2z1wap0ij' );
define( 'NONCE_SALT',       'q4qmsg9ucasvxop4fbsalmqbtb8wegswiy43ysyd7cxcjnpfjoxdkotgksqhif3a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7t_';

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
