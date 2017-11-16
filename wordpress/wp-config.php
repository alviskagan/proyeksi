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
define('DB_NAME', 'jamint');

/** MySQL database username */
define('DB_USER', 'proyeksi');

/** MySQL database password */
define('DB_PASSWORD', 'proyeksi');

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
define('AUTH_KEY',         '?OgkxKR38)<|J~0>5>Y<E;bM3E0~8k39Z.6UO%`e4.I5UD;[Yo2,{/I[!mi:zS7v');
define('SECURE_AUTH_KEY',  '+)vs)?WFm6nM~/^Ko_[mi{+Tk}xfdn=*NoWgK7Os2FWE#%nKf Gm`+Z;2[fod:vB');
define('LOGGED_IN_KEY',    ' ZH%(iYj78HL#>F=^xd+h+/2WRJ)B~,ZD/e-u5[oL^+HGrZ6wJhj_-!d`<=,Ln[.');
define('NONCE_KEY',        'wy>OSy1WYAN?G&ivKTY(/gXcD|PU`7?Ez|3zjjgyNeEKt53w:xXF>$n)A@^$:Qd~');
define('AUTH_SALT',        'E^>>$+o8!9Bj_)>lp$A&p4V(%j2Lm1z>/P&g9-keeLZ6J2R#]JWM_G&lS4C!kR] ');
define('SECURE_AUTH_SALT', '/?d%9b/Nk?KBY^d0AI{M]%LKj?a>tiCIl!*5pWe7;E@{NxfvA$c)Hkijyocm9`t?');
define('LOGGED_IN_SALT',   'a})pj1<Opqoy3Sb3dhXC3+}D$eK=5`P mt|?|R1Z;C1- 6G|^K@xCb.W)~rZW1{U');
define('NONCE_SALT',       'vk<]5<^7x0r^6uh`~4ch7!I^zW=zy}Rup$y;d2Y.w@gH7J/vbg=r|v~#MsCVJK[=');

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
