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
define('DB_NAME', 'law');

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
define('AUTH_KEY',         '<TF!;iSlw=63:D/Q181a3.7ZqH+K4@urGEz@>C/!78#iq/Zm`qP{6[41<]^Mc7&R');
define('SECURE_AUTH_KEY',  '&3v=@?`4%7lU-Ri<wIvm5+,W-qdwMzA-aG7=_ML4H31?eL#f{u5s2q%va=C]%2P9');
define('LOGGED_IN_KEY',    'SM)N +;([Sk}{!RKg!QF })Iy>GG tNN%5?P`WSWjzQ1qXnY/RpIlhg2N*v0_1Zy');
define('NONCE_KEY',        'x3#-*:N[jZ~ly]iyaH|RT>bM&cM? loQ/<UYsPmrbjx*$weFuIt]zdg1{^pK,8gK');
define('AUTH_SALT',        '?5`c{l(DigB*OGC a3eNEX;^qj(u;AbOEwMc4>qCO7,d<+Eo` ja6ncClJ?@,bZ7');
define('SECURE_AUTH_SALT', '+Ox`|ecN)ZF1{>^,-[2w@{@74P$x8:OL{,jetwpgRD>T>[;o_U`qNcvwo1[5xDL1');
define('LOGGED_IN_SALT',   'B+9d:TM/Y^vP7/NA%1zs|;;ZYblTFHc7@FyuM0./Wp_4&$iIz~lM^c(Rm~]*weC#');
define('NONCE_SALT',       '@49VZ%gS^N5!VD/(7nrT9{TQ2..uBrI+8rj+:yU<2Gyg@PQG?MR2~4^kx0Io9?Q6');

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
