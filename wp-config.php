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
define('DB_NAME', 'babysmac_masstlc');

/** MySQL database username */
define('DB_USER', 'babysmac_labs');

/** MySQL database password */
define('DB_PASSWORD', 'resilientlabs');

/** MySQL hostname */
define('DB_HOST', 'box885.bluehost.com');

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
define('AUTH_KEY',         'e]-|=Ew[by!yY nXo|]d~iKSN2MS4mA4JV=oB75]/o.u<-KFe$-bM#:j|}+LbhXL');
define('SECURE_AUTH_KEY',  'i+N2&?Y%:O8xpx9BrkT{v([]I3c/mB{p:W-m/t2kC^Gb>V &$0`7vYj*qg#e,^!}');
define('LOGGED_IN_KEY',    '|m9Qgpoh}G|o4Ee>1Q<uZoA#K+/Tqd{0#;bV8`d`-w.p QuIoH^~BkCAL(,(urAx');
define('NONCE_KEY',        '7HlWt5Kn+>22^MwM=FEhyy.UC_^!rT?Z#o -@@O)u0~w>#Q`W5 xsVBC-DQ~G?e@');
define('AUTH_SALT',        '=ODsC{+NPxViR>%/4m:Y/`:<IH@2#$0ZqS$D=q[Q2s};ra>8TxNZqQ~jI?[;M:BE');
define('SECURE_AUTH_SALT', '<][!+-&G~3Vpl_I/)UQuH,x>!hx{N>mOJX!$0*T<6@*&f+xATboF4C:rf4>N/+jQ');
define('LOGGED_IN_SALT',   'Ng7P:4rJ-xP*Gy5[S|W.50@1kK~+it*Z (6KNG~E[}_Ka08W=m&vrau+6v-$EIrj');
define('NONCE_SALT',       'M[O}S64apj(|1e]B5n* ]vs<!z>+&@&R-Rq(}zx3<>{D+az[A+dNoyMPfDH0d(+(');

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
