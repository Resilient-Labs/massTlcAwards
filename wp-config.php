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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', 'resilientlabs');

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
define('AUTH_KEY',         'po&?bBZLo69.#B:-8ATVV[H;{hJK=JiIp@hAYpjU^7t3;iqDybfyd-nlOHInF@w3');
define('SECURE_AUTH_KEY',  'yy4_S,Dbh8rK&}yp|$UQI%HkPvGzKMhJ|jOO+Y^^9Aeua;lf,Dto;&Mb5-1O^>~`');
define('LOGGED_IN_KEY',    'TKNx383Bk;0fS;&a|}4;@VVtD6{9&U@S$/Z ,Q]k)AgnqD|C uL.YP-CsUoc%)-%');
define('NONCE_KEY',        'LR@Z{=w7p^S+50c$N~{Pm%M9)g|<ct+TKbt@42+hV?<%&GhU|UKWD3&v#;o^Ma/P');
define('AUTH_SALT',        'QxB4 R%# | _dh_F(yzN3To3An1Sk(oiYPBXdE?P/gMR=W]AaL#>ynXumS|ng!`#');
define('SECURE_AUTH_SALT', 'G|g:nZg>&01Q^ZTO/5{-q|/My]E6MKHW=Qz[(j1B[-9j7H$->VD^O|[%0k(K?Hbt');
define('LOGGED_IN_SALT',   '/c |GA+nJu9~o?1B!ENoSgbhlbi01Mw8sH968/Wr_3d[N,:MF,;!E8Kl#_+J77vh');
define('NONCE_SALT',       '4|V-b8zo5driIQm!T<|pBEWg>(d[TTgWKTw2MLI!{bcb;=+-SG/~<h=*x{lI2g|J');

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
