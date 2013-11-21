<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'customwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4SAzd$b8J}|[g#a7c66$2x9CSi]D$m{@_6`r^F~Yf|ZgS+ylHDXN|B+k/!+$wJ#=');
define('SECURE_AUTH_KEY',  '<y#8{:+thFe#+i*e67Bk.D>*-|c4pk89pb&[SnW5mkR#<d?S&P[Q+U03^(XiaD=x');
define('LOGGED_IN_KEY',    'h_QJ`SL5rY1W( rfr}2!iBOJ=a8VlDQZ)Erm@QcFJ:OIxB-uUNXCkWdu)A}qp|Bv');
define('NONCE_KEY',        '~>8REJ2N2-~c4EY=-0x K>18u*j{q#&5t>TUnL]YNLz_@/x%zApMd.hn+R-/gHxm');
define('AUTH_SALT',        'M3=Y-+Wcja^tu%G&Ql0{uf%TN4JC@5|4 pd9wfh^*TB|G-yi)y,lO,;%AYr2z{4W');
define('SECURE_AUTH_SALT', '3 Jz$Mw,?L|EaKDQm,efgmEx4oynU*ri9,2dR9h7X6L6*}.wY>bz<c^ye`!E8+4%');
define('LOGGED_IN_SALT',   'q&UVBH}e%I<9k]v/TjIg2kStd<Jbqg6K;DqD0S(eKe@i% (}%+&h[SRrK6CX/|gO');
define('NONCE_SALT',       'n$>S|e;-8c?a}W$s2zcxDK{j_+~_Dq2R?xN-r^hU?/#3]zP[e3]3d+#XCnZ,OUZF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
