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
define('DB_NAME', 'gunn_jenkins');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'C`XIpV3#A2j>Ik|v4of`9WD:e%[Mm=-S|z6L,Z4zo9/MdX7KrE@-H:]39nZAtCBR');
define('SECURE_AUTH_KEY',  '`^:S fp!$|Kr&&m!Mv+Czh5!4U3?yQ$$<QHjj9EgUglr6+pWuQx89+#QoZc2+|1r');
define('LOGGED_IN_KEY',    '*]cdN2{j8+6K&+P7xZffA^:deoGdh]ae@(PeK&(PgynN 4Hpp;$2gKmZB=<f#NS2');
define('NONCE_KEY',        '?+/9h^|gE;$KVRNi}[8-I0w0J-dLi.%N^%i3 rj+`k~N+/yv#Z@ v#S{1+V$j Us');
define('AUTH_SALT',        '-u%/D`^H7xKG#UaShZ-#cg9.ok[FIZ;|e1gjlD>[KXyW<Q(~E**P*N]G?bb~YeSB');
define('SECURE_AUTH_SALT', 'dqdygdOFF9-vo@TmPdxwqi.Nn2W2+nZngmP$uEkv0nKY:*[(*L6KdsgtwbV5+}=C');
define('LOGGED_IN_SALT',   ')NJ]oj-hS<|cd5yVGIFz0Xc~scis+AL!Js3s0DX-SKfVy!5wwlg/y/kJde+i@:;t');
define('NONCE_SALT',       'k#.YbqvHyR3+I`z}%c|n:8I,X@y*_+cD*^-44`mrN|z_|f|rK*_MRi~!=VbI}5 n');

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
