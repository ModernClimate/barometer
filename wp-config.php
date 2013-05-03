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
define('DB_NAME', 'barometer');

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
define('AUTH_KEY',         '9v+-yg+^HY+Wm!d**3< a!QZtQUB8;/a4]oG=Jxk}egNhJ5OSg{s[U1 w#-uFH:D');
define('SECURE_AUTH_KEY',  '!BU)Zn|L`2Q}L)bB{4KD=fo^bc)`gEav/L9Jx3+lJRya#V@ih6F(|s {*n7z:.50');
define('LOGGED_IN_KEY',    'ng~,/]so*Uc!/JAz`u;3v3CGMqcnz#$e8(U@vw)ZX+9y[*F(wSyOeX|d7|hA]CZY');
define('NONCE_KEY',        'G>Hd/;`R&y}rQzc JWg~OW-:M0bqVKN4Xp@idP-]g!_}Fl;5aK[Jx[T4@TRg-)/?');
define('AUTH_SALT',        '1VWni}CA>NF)zdLo-p5)B+~)k5[u.kL%5Dh-<zc,Xu32.hDy}In|$-}oXHFqF{VL');
define('SECURE_AUTH_SALT', '`JFte)P6Z<A#7OO8H8x|bGtE6]~ {S^WQi&*B~8 _gLsCc.C%5):f&K#x;Z#kQ1s');
define('LOGGED_IN_SALT',   'ob&f|RTw.=8v/n!gPv+qoo[w0)GwGrG+Il;fpw)6`1ci(QG:-A5qo3o`P>?MjSF]');
define('NONCE_SALT',       'N{+hK/fS%&<.@5i,hTQP7k;kcea(hZPHP=1I2x8F9IFyEN8nL4qYjA5<M_RU-|M*');

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
