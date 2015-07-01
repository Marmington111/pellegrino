<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Drew');

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
define('AUTH_KEY',         ':?u+6a(~]~H~p;Pa]CKrV{u|_-+7$+?SGcaL]2q2|4|Q%s82Oi-~S{}+pj2et|,E');
define('SECURE_AUTH_KEY',  'XlK c+Lyj<}-Li3yc+`Wz/wW:V<bF)(yw?:[[#zM_:86x5B[KB.YX(<+B&x|,-x,');
define('LOGGED_IN_KEY',    '06Q*FJ*r|EfW3k#(TbKZg^K-e>-u|D*{v&{7Mm:qL?v7q2#oM?v|Mp6z}-4|As B');
define('NONCE_KEY',        ')GdB6OmD>)hgc0e&La<d<D{6*smu]|[[kFuUsEVD&0 L|NG0|!WU:TjyVMivvmgp');
define('AUTH_SALT',        '`0}|?tt+rPsskGsgPOJ(G;C_6[fQd[H5<WiZ@+3[;`|[$aV#xs$a-td0bD;Vp-^L');
define('SECURE_AUTH_SALT', '!_X Y|AAMXzSEG6 m?8&/,mya^BK?spnZ2)B0QdDDPV*1K9&aiG#X64+4V;-]WPj');
define('LOGGED_IN_SALT',   'c-:6r]-R=Ty{*|kHD<^!*8!&]NV2BF$lu^[59*eJ0m3;t1Edh|+>wR$wa /+|O6I');
define('NONCE_SALT',       '9SYo@aFc3|`PiASOv5[2+DQ-zHHV9GOSe%MK5-[sDF^14+5jU:kd$u?_b>$nnXdr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
