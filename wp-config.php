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
define('DB_NAME', 'savuertx_db');

/** MySQL database username */
define('DB_USER', 'mlvandercook');

/** MySQL database password */
define('DB_PASSWORD', 'f00diE5');

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
define('AUTH_KEY',         '21{cJC+YJ9,R|?~2Aj4*L/M7lQ -,y/>9-dPwT+~D(u-<+<dee;H}NK_6qE}[SPH');
define('SECURE_AUTH_KEY',  'c=c71s+R0DLC.S?URBxie%wj~whQ0a[KEqy>^^p[WE_2D|nc@`P7iPi%fZ5!>|Cw');
define('LOGGED_IN_KEY',    'e=k-&=P*LK;:cQP6>F})Lffz(@}FYPgz$`bHEV{F4m+g38l0Cp$2|sDd(I+Ig~Dx');
define('NONCE_KEY',        '%Ir{[H93iwyJ1[0:+K{bR}-VC#*M-nhq*I-UKiT#mP/B>nL$Ev2Q|tL5-rV+faPT');
define('AUTH_SALT',        '.*5^xzW>?9w_XS+p(h2iwws)^5=!*[XC|^Gwk]fqCYXR+|#2XK2LaD[< f;Dzi^M');
define('SECURE_AUTH_SALT', '`/lu(aBqABP|t8c[}0hL*RK>xe,K7uVMvx5.CFdF|SO.=i+z}]#9ir;MOR5j4 Bn');
define('LOGGED_IN_SALT',   '7hMfR=4MPu|0?!b@UU-;qg;OM8-wYtPdLBf:|bu*fr(u&Ik>$+q6h-t6a9$_/&zj');
define('NONCE_SALT',       'SH1FH,[bvn2 |lY<Bx[]YOsEj{-V(W0>Uq/&x-pFllvU3YL+x>&Kc*Kb|Lieisy%');

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
