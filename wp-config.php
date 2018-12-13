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
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

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
define('AUTH_KEY',         '[!Vc. x+D6>RS=0o6:Q1K:!F}3uzPvteZ6qyR#BtHs1w$:{ .OO-6E`jlBfllGcz');
define('SECURE_AUTH_KEY',  'C$z;a3}%Sv3+uYew:k>Se*0=6zcl:>YWyf_X%y+<KcYs8=$]y) 4;v<|)Cm8;7fj');
define('LOGGED_IN_KEY',    'Z hBk}Na~VVX:q89u-k?~>IX8$7=YpK5x,^V3V7bp:BVr7h.0@LUyq%,F9>*# X4');
define('NONCE_KEY',        '!r,h5a9#gJFIaU%NZ5jDg/,0;4WE*/QSPR*OrPwR]YY%tr6cXJ-HQ9&kR_e4Bj:y');
define('AUTH_SALT',        '+jq.j+#0eE%X(=]*H6Z]QpQ+fBPDrY2r^L*;0_rR.J%~H??*,rW7%290t]hqKItw');
define('SECURE_AUTH_SALT', '$OIo_5C$3{Ld>Kk(v-x92+S%hb<>LCM8$2bj-h/IT@>RPZjYOcswOxq|W9UUr5;P');
define('LOGGED_IN_SALT',   '?wGJcMq&a0<$L_PZ,gW~F@M<s2Sl(2aUtrghFh,{J*r8:c,WeYj&K.RA?:K TEA$');
define('NONCE_SALT',       '%gC:1p>#-yvXg2EIvlvQJ3k$hjF& [N&azW%J;<i8d cO[a%_^T@BCs475wxg0JV');

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
