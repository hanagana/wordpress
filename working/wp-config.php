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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'a BXfe,r(C18Y&No|,CdUqdhiGrNGhrl`AYRil)u0*#n@*[%+(~:1h1y$olG-v<X');
define('SECURE_AUTH_KEY',  '$Jl]X4_M;y|6Yte;|Rak-[Bvcwi`gO}s53Zeef1npQaL~bK<+6,T~QDCU`We,<^z');
define('LOGGED_IN_KEY',    '_;<pXAjls&$<Zf_8Y(S%IhekeVL=usH.+)[`3{-&fQ1Nel/]Opl;?j]{+M1!D4Y5');
define('NONCE_KEY',        '8=2m~4n^m#YThwxn-qyEk66~#d!W/u|Q4JobrrR<Do~8#PPbiii{.+Xt&gOFVv!|');
define('AUTH_SALT',        '4ymG)ALlXQyi#^]*?Gyh?a|Vx/,vmw @R7ygF?J(YgJt-OJ>->2xB+W1(Lxsd-w#');
define('SECURE_AUTH_SALT', 'g8v,3?gF93^/!:#|(2|ZuWVmJ(o&9st/t*uFv!`8Vw]ZJow_1_UZuMd#>#5p]%Tp');
define('LOGGED_IN_SALT',   '6cbRBLlU:]Lj9Q53D!^%j$Dw5nX2o~5l.d]:3RPY|=&5cu*ptzsF<AGVp-UV0-9D');
define('NONCE_SALT',       'XW)=28E%s&89RS}$nSGQ#DT`a4QzvYwp![Eb7A?/u_EPxzj]4c *B5uqc(U@Lx I');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
