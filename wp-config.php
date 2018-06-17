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
define('DB_NAME', 'goahomerentals_db');

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
define('AUTH_KEY',         'h$5rXG sqLST<=aW4QDu$C>3|v;m%_$PBSEZoHsSu|g9WU0*LWc[L!IN0Uyey,Q$');
define('SECURE_AUTH_KEY',  ':CWLR!R&Ns}K<n|hdFbKOw^!uZV~d-4=#/{7CTqt0iNf2Y{vLi(cSNs>DXEnCUYH');
define('LOGGED_IN_KEY',    '3xGx*6&zFQKZr<[(i7O*YCtf)hlP6v(y]EM&^*}S.uu)d~RP$X]0d8Z/7+4W-xs/');
define('NONCE_KEY',        'hK%$ +|#,G%V?=4aX+)@S@IwlEE2Ym5TmwEOQAq?NU>jt]pL4c]5Aj4a`4b$o~qj');
define('AUTH_SALT',        'Nd,tbgfx)<f}zw9-M/u[I}j :]g ?L)b2D]F)^Ini:e)6p%e))c`!D-4T63pd~O_');
define('SECURE_AUTH_SALT', '37_<HFh{9bz8VL*_(K1W(pKwu~:|z RpP&F<_IpL9>R8#2S`&Jw-TD|.< &;L[Zc');
define('LOGGED_IN_SALT',   'v74%:~F-trUDzE*i/1Sz{Q^5}j;e}Pr!/zvmsp5XC{L.*4}ozbxZl{$)=msjvo]K');
define('NONCE_SALT',       '7fYMh937x0<2DA7&G]&LR*%-Q%mLl<;gbKVE?.a;q4B}8@?k)F]Je;QA>S]Dk3gc');

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
