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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'piraci');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'lucas');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'lucas');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=6Qe,-k92Az(BR;lK!ji@bj*@e~N(&hI+G%]A%(XiTF;Dv|{j+tM-)|39a,6wT8<');
define('SECURE_AUTH_KEY',  'q8+,o>gI+x6|Kb{|3?)G/^dXGkk<mBhPsN.o1P.|jbi;x>lch}GpmUR!+42!T3Z%');
define('LOGGED_IN_KEY',    ';>IF/HGE+W,{V1F83@ER}w;c%4bPL:HY;)5Z-jgGRtJ-CIcx:-UeYp|}U!sE~Q2&');
define('NONCE_KEY',        'Ub,H+EK<2@BJ1%{]S|:fx$IN$+n]5|1 g3|qe*./m%/-sFzN2vJ~ @xkW?P~r&5^');
define('AUTH_SALT',        ')$WtS~1]%sA><$O.4gw0i1Z]~Q7x$P/[6w_S;[ZGo0|Amfp$N-tsd[d5?FWN^I4j');
define('SECURE_AUTH_SALT', 'm[^`{yI}bAz2&{Vz--Yu!3EmO3LCN7}f($ew^UN;+q-|s+B<5GvI-Os<Ymza*KwY');
define('LOGGED_IN_SALT',   '9|+ltHcRFh-[I$H@:1gXP]`6E3(uUjYFs0#|r Gnf|) hf[uUd8/NKM|sUJeu,Yb');
define('NONCE_SALT',       '#>Wi/s F3s>8Q-CI+e#!HtpI{YLO`J7g4-:1O^xOVE!r*&=EA3*fsG@V-.m<9-PI');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
