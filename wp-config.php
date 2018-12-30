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
define('DB_NAME', 'farmersdirectory');

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
define('AUTH_KEY',         'v$n$u{S?[1sLCQhza[&c:tcTm}cDD:qAGQu(*l5/9BwbDl=bzFf/|,K8Cd--yf^F');
define('SECURE_AUTH_KEY',  '<9XT:o4=}/LHqY-+W1f}Z1pA+bsTyyvYGazs[]P(L&/]TB.6w1{&N9AU~gb[lz?j');
define('LOGGED_IN_KEY',    'F#w_nI3,9{5FTV0wRx``lMeMh<6yqY~oTsS3QC)ipg&v?@aVfNl]%<*^EHM}gNd+');
define('NONCE_KEY',        ':XM^d(kg9d<8lNzv(^Wb!|CYkAsptzbi>,^MVsLB4.m/^ekA$Bm}d1#(}!c?#o;k');
define('AUTH_SALT',        'ftL&,shbWU)w&}{)?-SDxy+4eS{P#(700xqIU-}W&:(]u)#?ZptwGy8hGEEz,{SW');
define('SECURE_AUTH_SALT', ';#Z1{S }YKO~(!FUj8~ z/8d3?dJzPOsc.O{:t$In3M7TOPW5UmbM(-xLh<(ruGp');
define('LOGGED_IN_SALT',   '_TXjnj:mpWNY)7l;i[!m3$mwis{:11.hijKD4z4B(r1%v|XsCvOv!+ fNS)7ia2F');
define('NONCE_SALT',       'qH9>Mz+ag6jm%u#ZK=SNIo;Dl^A:JZGBh*zb(:C6+ )+i`9oa1N,@!T<XR/-Py+t');

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
