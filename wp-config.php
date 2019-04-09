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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '4b66dff79ac74a9188046d0e11a9172ec94d117842413257');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'gJ*bvz.P$}fiPt+g(JKQ#bn|g7X2F.%H%6:4ONRDKWzbt8{E?GIRd1o-iC;x3apW');
define('SECURE_AUTH_KEY',  'I[&L)e:pMXn Go@BP$Uja0sDFxkaUY]x:%662!d&5W_HPMaUcaJg(Svc7[_8KCdA');
define('LOGGED_IN_KEY',    'J.Hc;QNjFHk`@nToZ-*?(G[aZ<!/W%>RUR&u>R<kn@RRp,K0d4!&}WJE.iZ6SHvF');
define('NONCE_KEY',        '[zc_IX8d@VQ)q];;M0/cA|pZ%5P0iE*tC#p:F Ty<(kfLk<>%_402Z_y/)JukZsk');
define('AUTH_SALT',        '-fB-a(0p=I7EJ?ZA[:^fpTuvU`!FGr):uekg4Az+K1q&lcdA%a$D<c/D_l$=--[M');
define('SECURE_AUTH_SALT', 'BqAwd:()9UcHVp+rhmD4aGON}k,:hb3VVAvI5D$1U7KU8LUBR_^g_[fVK %;ZzE7');
define('LOGGED_IN_SALT',   '<N9H~Tj|PO0 +BH`C^E!<8)5%Gud(EW2Bp.#txMwLq?xOtn}[P{26TlW|aO-f<.;');
define('NONCE_SALT',       '}FiIwi-,k)lxXf+ujpHT~c1i Y0,}FOG<gD=%I*,tooz[~F=ND!6J<FX.:CHQ4C^');

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
