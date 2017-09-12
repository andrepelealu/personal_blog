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
define('DB_NAME', 'personal_blog');

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
define('AUTH_KEY',         'oFCug@yPWJqK^=0)Id-R~(%8%:)J==;Ti42wZCakz4u]{EvncnC<HZ!q8kRK?0_d');
define('SECURE_AUTH_KEY',  '`-$#FL O;R$QFacjFw.Eh/?OMP<)H%7,BJ@)!SKRG4$OEeWHz*f?EPN:/Z:irWT-');
define('LOGGED_IN_KEY',    'U)}z@gWSjpXa#r*0.ie)JN#tO+ds74[Nd&oE^nvhg8DT?#mQ.9gq.B,:Q;Q=T>#H');
define('NONCE_KEY',        'NV:6yjr1sSl3vooF{s7o8i*3.-E]]NAX.$`*.h6*>TO~O]]JZ%? dbzjl@mx}iH2');
define('AUTH_SALT',        'qQ)n+$7*o&L@Pd8nn;p3)@R)n5P9D_K9zq:j(>mObWw7HVn*Nc6B7BB#(735NrCt');
define('SECURE_AUTH_SALT', 'Z]{-S`Bp_@H#Tuy@]u.fcff-tdybQetf#@Odt^vDS7jsu,7FOM2Ka+#2Y6lM^F&$');
define('LOGGED_IN_SALT',   'Q}VuzG0r Go^Fx]! 5o42EvWiH]ZN){0[ye$Yiw(&(cfV+JO&2TW{spL={V)i/fd');
define('NONCE_SALT',       '%d)z-Lw*wQr:bq*;WnEAW#2[N,M%~A,id1<9/odd~D*]$3_a%sE3[=@Qn(~,J&ag');

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
