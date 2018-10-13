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
define('DB_NAME', 'limuqing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '941019');

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
define('AUTH_KEY',         'MCIc3GKHNAY|8RCFhnLG-XVdJQ?cC:1oUJ&Uf)RvEQLW,6%.m?qVn}.^>K& ZQ=?');
define('SECURE_AUTH_KEY',  '8Y~pWC1f{U8%g{z^<%jbq utzMO}?(:`O!F0Q[TA@3A~~iY/KkPM1u2b@p]@Pyk$');
define('LOGGED_IN_KEY',    '[r#7dNn&o!!cdI,<(FPy]U:F_(F-a}Jj nRN%Z3Yc.1ne&c7%3AE6gqjM4@Jg*cN');
define('NONCE_KEY',        '=ed{qZmWqQza,lxp!jJoW09g(tWJy547lLt%@5V{s.eurEzF+s$OV}y*xFZ!<EK[');
define('AUTH_SALT',        '|@k{oQw~+s+s%q&mZY&ouk3:-ozoEbj.t?O:4 S?#,3)$p^NgLzV{U}O/Zf,8Taz');
define('SECURE_AUTH_SALT', 'm96p4|*yw?Yl6`K.T:7|Wxx}>z-11m|cucTK,1:oP-#4 2c(;ZYyfMkZQ*~iRIvg');
define('LOGGED_IN_SALT',   '6JS(b7zsLFK?gNiX#4vMXG}`5!{}Y`pK0HhCKpF:s1Fqy-%>c5,))v79{(?g9L:x');
define('NONCE_SALT',       'G4]|#geXpT9klzM;GLF<!aD8.QOGmix`S4@F4yn5vq*$jstA6j^iB07y-i,9zNy?');

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
define('CONCATENATE_SCRIPTS',false);
require_once(ABSPATH . 'wp-settings.php');

