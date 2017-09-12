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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'dengerinbuku.id');

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
define('AUTH_KEY',         'bm)FFqLv;d(+IMCN`u,)>jEq_]u-Dd%7s&s*QPO93nT[5!6h-jXDs -a^#pd:cXH');
define('SECURE_AUTH_KEY',  '#0%2FtM(;-%<1GdlAH+qcY9vVPYzI(9bt/lI?YeJb5~vx7G1ifZ =C4U6;.@+u)T');
define('LOGGED_IN_KEY',    '6`,nu;:va+bf5=kXuUfAks)i(5-J)|C<H^GS`P(-HZ1V:E2_|KuNth~^L!N^9q_7');
define('NONCE_KEY',        '1<.P@a@)!8^1FMO`Kb+xc~F4XOWZ8?|o;|Ps+hv:tIZW!<7A-W%UtkvlvP.txyO7');
define('AUTH_SALT',        'q77g*-hKW^yu? E-8ECfY>RJdZJs)8]?+N1<+MIBwZkb]|R^DwmJ~ oj/h+]S~qy');
define('SECURE_AUTH_SALT', '&Ssa;qC%X^9Ql-s(yQ~LRWlh;?2Ef#8sG8Sjfb-FnO|U< h7:b}.4jThXlL#LaB>');
define('LOGGED_IN_SALT',   'w5)):;D(-I O,ljEK&uI%U(Xh&/Y?v+Cfi])/B&ZJC53|g,M^hJI?=kF*PFVia7U');
define('NONCE_SALT',       ',~iTO,hh7b0.R>;|_9/9Tvs5!7O5.I}4rk68j/JA{`}&1X^G/-<[bRgk[zw-2Z1T');

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
