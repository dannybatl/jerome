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
define('DB_NAME', 'jerome');

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
define('AUTH_KEY',         'KX4sb-pV6]Ml/i!<B1(NY$*u^o>DdoEh]$cwNYZ1[92Lt;c{]Gl)k4d0LZ*|*G7{');
define('SECURE_AUTH_KEY',  'L^Yj$zzz|i|jPi3 g6`11fvlPqa&UCWc&zu0&^.jk!?1;0Q5~;OT8>XW[}Mo#3~w');
define('LOGGED_IN_KEY',    ',JJN/b|;e m)(kfQ]+Yd%(+hlNWVfAha7s*QX:{S[T:qp)@1R<25(a6pqBU%}#FR');
define('NONCE_KEY',        'J3kw_UAFAhFFtzG0.fo#a~+%xhT+gf61{?Yw5#(p;]Yhden#?re<U[8Is_:5V{@Y');
define('AUTH_SALT',        'kQ<c(LfgpcW7U[}chW^(~I}P{VcxGl8[Wh,RHgWemh};98be0{V16]g+/zCvnUJz');
define('SECURE_AUTH_SALT', 'K5lZ4ws#CwUD Y5iLNCs7gB?!8xGr-YKNn3C*riwB*^QSif_}pZ6(FJJULUe-]`#');
define('LOGGED_IN_SALT',   'pT&V,gFd2z}UDGd-,q_Y?6,eDiIDp7w$s[qam?}FK-q{b5:aEG+)/!EJmAMmF|q!');
define('NONCE_SALT',       'K`ybR$mX )6 wk0<IKKPV1/:.&XwXAr>_bIRXY6mZk4Pt^K*3`R| &ek)B-r[=Fk');

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
