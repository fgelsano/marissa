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
define('DB_NAME', 'marissa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'webdeveloper.me');

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
define('AUTH_KEY',         'd]R^5puM^,K!K~Rcn.`kuS#~vzrIWXqLIOp8R6qlvw4Bm3_?x.kC^Q1sFV&dx[tg');
define('SECURE_AUTH_KEY',  '?+!OBNjR,)U<~M(Fm(R,JpLE)Vec$dh1m3-4h+.yggj=o h%yPt3<WIy5ly*NfW8');
define('LOGGED_IN_KEY',    '3bD2j8(!kr@qMR| EKxQtT<!J=X`OaF{bw<B]%tQ1i`|9r@F5i.a=d4T6qZY$Wth');
define('NONCE_KEY',        'f[orWhi6%J{5~U`.Nfy[&A+k,e?NS0MAS&VXbc?6sAEO]6yC#pM(2_<Jv)k1=h%&');
define('AUTH_SALT',        'y/8qEDmaB|]/#J:U>UlL{ZEh(F]jb-8-+jw)1#YQ& Zn9,^)lN+@w:: mk2u~/P:');
define('SECURE_AUTH_SALT', '*vi%(c6l+<Rab8EwB@1I VQU_s#LHs;h8h9$P/:USI(uke/S9bNSRHMSI%X9-BKj');
define('LOGGED_IN_SALT',   'ty7U&6.6DZIax#4Bw3vgr87CpPk-onuhlX$?EZA0Ox-7`dF[INsJGv|Fv*.?%w!R');
define('NONCE_SALT',       'W@u0PM_^maQ/(M]G>t]yPR {IT?Dn:8JMt`H,YItf1CTSvFQAH!=!OQ%eACE@><.');

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
