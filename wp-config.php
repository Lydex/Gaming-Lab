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
define('DB_NAME', 'dbgaminglab');

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
define('AUTH_KEY',         'x+d#vL;;}PeJU_f,Ff)o?#LRdK&^2s)=3%+aQs4inI9^$*D5=^/?t)hY<^z%E<tW');
define('SECURE_AUTH_KEY',  '=]N([/My,g[-OtL-9et_HIeE:r1Ll+48IsS.u|EMK{82E{~aZ!lA$o2y9];5TxV:');
define('LOGGED_IN_KEY',    ' uKROuu-nYKY0Gs]tXV4,7O#X+rmy.N4ODc@=~4z?+?Ml<|ciJI@CES+hO0;vD`@');
define('NONCE_KEY',        'a&J=t+AQWoD^U=2xJ $a|3tPj)o&!n,9&xk#{e27`#<L-As+$7L9d:EYZv%l9;*d');
define('AUTH_SALT',        'BjN[O}89+]1>v.KuhZ_1$j-jS:M98;S|bizxj`jX~40{3Z8.%-*D^D~I8^|69o/j');
define('SECURE_AUTH_SALT', '7yq__)_&Eu-XFygB:U:drDrr=MM_+xqftLXZtz_FtXZeKE}+*&3>8cz0Eyw@Oa)1');
define('LOGGED_IN_SALT',   'SJqo=Qk%A@/xlOx0>gh<:Z,I4+tis*!f)TD)]~*XK]~])%W|{ at`YF=HA.T0*)=');
define('NONCE_SALT',       '@V.J!gv.>i5WV%n yNKaEZbnsd#sAOKP?QlYY_G{>P`~Z>+T-GqU_(Jl.CPe1wIM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'glab_';

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
