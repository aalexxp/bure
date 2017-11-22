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
define('DB_NAME', 'bure_wp');

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
define('AUTH_KEY',         '<R*Kp>+@5xy?%H^Lvczf.l*7yvEH_w|N6/assO9XNwo&s4,N0gKF]ONEW=s::z,6');
define('SECURE_AUTH_KEY',  ':_a@JFaB^09b0RbU0;b>1w*O]1<R3O%B~c*nl#=hl9LUF[+Mi?C7QcpeUwDcb8x-');
define('LOGGED_IN_KEY',    'MgGk&#wr#}hL6A.I=S.b tzkmv;H#_[ol7|W!Z.;erPYDb@bA 2k3?OF3QL?3Csf');
define('NONCE_KEY',        'ILQWDUYPq`%&F#45SJc!;:Wm;Fj|[6^9BuN(LOtPH$D9&(T@}Def8aryQ@;(Byb!');
define('AUTH_SALT',        ',kKz1nR7oaMukhPDuzVaKylAtsDP9Hm)9bAwr}m2FGDv&xeKL bA2mv:qp::umi ');
define('SECURE_AUTH_SALT', 'COV/5Xuer-B8);s>@>k1YWxEu$?C,_s@z!BWg_]C >zfX2.OlAj{paX@4 --z#ao');
define('LOGGED_IN_SALT',   'g3S_I8K:XE|s:Jzm&Yu*lp:lY-6O,.*X|cohEb{}E%*6Gb[ER{2J {2_:{xSB5|y');
define('NONCE_SALT',       '9dz:=%wLmE5?L4 B!w/afp%UjaGYa>})2.IiUBy{:?`?byX_p.fe<w7d%;Q/A&K@');

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
