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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2Nt-|VM`k-;x`{NdL|t,JpwmQx[+=H!.:_2C7Tqkq#/7[<9}UM]4Aq%-prg]0R]1');
define('SECURE_AUTH_KEY',  'k-(e#Up;Th&04|ciG[v[:B|XrPc5(9Y9[I6-HP7Fo=)[H!=}+Tyh3p:xDb9m}oia');
define('LOGGED_IN_KEY',    ']bMG/oJO|gi}gzu/[-n2c67Pf1MHB.M|W:3Q/f3KyQ4?-Z<g+]wU|t>r&]Ey4NUV');
define('NONCE_KEY',        '_]-WfZep!D1{|Md6Y[|E>[&dxa<ic}kpn+9I/>vSm8.4NN ci7MDaoxa~?My)s81');
define('AUTH_SALT',        'AYij/3sAf_:~<z-+8cXN$kZ;}5J$8|ii3;CvG &<w=c{KX*Hiqh?z]U- o#hy5yp');
define('SECURE_AUTH_SALT', 'mp&/ZeQ=Sm2|vpzVbX-+W/z-Fb-+@;}FxH-y6e!.j(oWK$AD>X:5h%#5*0GVz]ZL');
define('LOGGED_IN_SALT',   'ILU&}socM/{NunO+e^!_.8J>Q1E0=M~hz{^~3|{-2(&uIb)4F`syk5tr1j=# ]Z$');
define('NONCE_SALT',       '7B3u/8+t|y}fuly$:rb gLPiaOvs=4)gkT,M]]T;>iRS>&hPULH/yrBU-/-1I{X4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
