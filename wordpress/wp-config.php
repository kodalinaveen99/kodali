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
define('DB_NAME', 'king of kodali');

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
define('AUTH_KEY',         '_&k3UB0KP}7S5=G]rAFTuom;2a,y `d,7J|zQ]j~3)M s>w-lJyGzzmZWzSv{u{]');
define('SECURE_AUTH_KEY',  'P9xN )$NXp#YLg1nK9x<y:yZVn7+XVr~A]ICjvitJ:ldiA :,dW>T9qvaH1[Q+xN');
define('LOGGED_IN_KEY',    'oiEuc7M{Ky`^#~12,EJB/xj%zhGL:njGk9y }SlhXFqjMMJ$]c6d!:3%8{72_uRE');
define('NONCE_KEY',        'nw_`GzIpgtwmR,L].{>)Y=q`cDxo6.c{.7^/TF;;Zfdst0@iQ|&)>gV/l4gH.2QN');
define('AUTH_SALT',        'aktt+)44_:rL%ID[cm;Y0^[ DT_~lp8zOR8Ip?tbYx#%Y! #G,K(,9R?V?M@;7aw');
define('SECURE_AUTH_SALT', 'EN+{BZ3:c;S`lwM@I^*|a0~qlY}}1*bl1[$4<&*?q9woWM`k#D/(#ld3*Q#fX v|');
define('LOGGED_IN_SALT',   'nOfPx2hua5*xon>rOw/gxJ2Pb^ll7mK+!cV]RH%n9I`U/Aj]Cq`n+R{JLZ.Yt9P~');
define('NONCE_SALT',       'g@8/[:<Pi3fZEFKz,+A#Z|83-v+/IcBA0r9[caB7t|/ 8TfZ}yRWiag7:?]pj2dO');

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
