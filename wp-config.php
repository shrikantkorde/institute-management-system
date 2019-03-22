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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'institute');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'meZoG-C%GLdM4N,5>M}Z+iJy#-((z d8ZEzL&e0]r,IPqEkaK1@oDfl 0!,FKwah');
define('SECURE_AUTH_KEY',  'U!vYxZdA+|L{!-GnBUS<GCcjT7(g%YS&I]iDFK.Is3nz5%XtJ9([<Q:E^#D!HO,&');
define('LOGGED_IN_KEY',    '.*[0ryrmDv)|^|a@)(s_BB;~%ymdgy-Zk(0YzdOW.k%1h1w7142^*$g PXNQ65W=');
define('NONCE_KEY',        'Y$D8k<*t3CjR{1hry>E+Z@f#eJ<Co|m]Kt^W~>gz.?TtZQ_md&R8aW69ueH+=y/@');
define('AUTH_SALT',        'b27A /2##rz^A Xj3E<H@JKzEAqD/.h66Tg{CaY$oa+*;>R5=aU`B<]o|jt<LGXl');
define('SECURE_AUTH_SALT', ']Ksp.<iH=rl)t[gLCxY*V)Q`9*f;IhwSQVe?=DKz!]3{yf~]No92-fOFh&kkm!S`');
define('LOGGED_IN_SALT',   ' zhCQP~~N^vWA&0tqO|!]iLYh00lnpacE/&K[j2BVMbxa2|3eS:HE/.clRjMFtcl');
define('NONCE_SALT',       'blj+ZEYRKy}Rn[5.4BR[:(;Ghz]sm$Rw-v@Z9[fNWu4{ep3C(s[}!B1{FY.8I|5>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
