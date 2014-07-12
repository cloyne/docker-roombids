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
define('DB_NAME', 'dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'Y)^Kw=%D*BxtDI?j2 :,}V.tKkA0AH>([EDzjYs7%qvsXFiH4T%g~8OkypqTp`Bl');
define('SECURE_AUTH_KEY',  'UB.HG>5tRkR$8j6_o|=JPuRF-7%!||> +EL7+0s`?Qi*94RVqg:<9/.k]=TTguV[');
define('LOGGED_IN_KEY',    'd-q|dQKee>oUXy&gGOA|`ttkp l nP/<|qs*tTDK [Nq5W1g(KzOe9ych^k}tdx{');
define('NONCE_KEY',        'oVCZG{nr6|(G[Hag6=qU8yTenD^q+wp=G;)hlFmJI/`[O_BAQ<-lf$,2_vu2.f`q');
define('AUTH_SALT',        '#@(-2b.3-0= atF2V-^-i>[m|e(&@ezgard)72R/YWd.@[4|Jjn3>Y0!BDeDqBNQ');
define('SECURE_AUTH_SALT', ',,-GHT,DMRo4M4A`)Q3OII:J@,s K/O`7^tVu#V(qTAU_kj2J1URd.q!SVe0+[vu');
define('LOGGED_IN_SALT',   'iErMey1m,yIAbXP8lnZ0^u=9+*r[{[X-7R:t/.H/0*&I?9OV!wAvB%>6P0nDP*{R');
define('NONCE_SALT',       'M,/d!O->~Ekb<$ex5A41Kh-0>K:yeGi7u-,8.H6zk;<x0Q#FzgUx@a<Qm/s|--N ');

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
define('WP_DEBUG', true);

define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
