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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** Online settings */

/** Test if we are local */
if ($_SERVER['SERVER_NAME'] == "auto-migrate.local") {
	/** Local settings */
	/** The name of the database for WordPress */
	define('DB_NAME', 'local');

	/** Database username */
	define('DB_USER', 'root');

	/** Database password */
	define('DB_PASSWORD', 'root');

	/** Database hostname */
	define('DB_HOST', 'localhost');
} else {
	/** Test if we are online */
	/** Online settings */
	/** The name of the database for WordPress */
	define('DB_NAME', 'weewillow_comsept');

	/** Database username */
	define('DB_USER', 'weewillow_comsept');

	/** Database password */
	define('DB_PASSWORD', 'sept12');

	/** Database hostname */
	define('DB_HOST', 'weewillow.com.mysql');
}




/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'PQ^I%(G3Dy@*_?l/}v^Hr%cr;G42*@C]^*[|Oal= mF,blb9`txklb$E`$3*CJY/');
define('SECURE_AUTH_KEY',   'c[bRg4.tY 7`w5<E*X.FKa~Q+owtHC|4rWR)m{Qz5(5n}yj?gg8msRuCn41Pi([F');
define('LOGGED_IN_KEY',     'Rk!y{*1==IztSJ$lw8Kt(E%YAU#M1ndec6s o|6dw/]z}-Gatb]c$pnqf%gy$ChP');
define('NONCE_KEY',         '}?WLL:<T)d;*FyaF5(nK:ljg)XJFFq 7~6fnJG{:u+X;=b`D!{Z&T-+O_#Wnmv<K');
define('AUTH_SALT',         'oCGVil_g~PD.B2k 26nM#B}Py-QE([>@JWk+:Fmx= ZowZWAQ@$Em|sDUrw8p;M{');
define('SECURE_AUTH_SALT',  '[)ZY{DVqwl]({O!Q&3kS(XNL=OQbT-s I-P;FDp[#~g1,D3AWuMB58an=rF8wR6`');
define('LOGGED_IN_SALT',    't^(R3Zs=0/n,;fcd#e0Ucuq|T)?%MD0d0(?X6rD++[MKAXL)!)pzH#FnIG]hVjuP');
define('NONCE_SALT',        'q4h1Uoa:S}_ui5LLrS!}.enr*Go%&Bur@ 0-.ci+ve0HVaFSH2/eQCk70j7hOFyb');
define('WP_CACHE_KEY_SALT', '84rW3[VMdV@L^a?{7w}FenDksl^iab2<^s7S%re-oF]5T~Nk=uu#g?DarWH>373:');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
