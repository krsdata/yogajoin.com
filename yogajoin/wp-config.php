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
define('DB_NAME', 'yogajoin_yogajoin');

/** MySQL database username */
define('DB_USER', 'yogajoin_yoga');

/** MySQL database password */
define('DB_PASSWORD', 'yogajoin!@#');

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
define('AUTH_KEY',         'XKWLq_D^-m9}FHnV-o|3+G._l,|4=.Jwz<$`Sl;K6}gCE sJ7a|@{vxZZ*x6q0f^');
define('SECURE_AUTH_KEY',  'yZsd ~HLxDpz}pQe|`aED#Qs`sH#4A/j,T~X(t$U>YhTXj+[e!nbM3+D%3uq^y{y');
define('LOGGED_IN_KEY',    'OPyj7w#v>DPo=Ko<44~>dv:x!mg4i1jt1`<OQ.> Q2m:+`~j=1#~W-yie2:9q=}~');
define('NONCE_KEY',        'S[+v_0sZ+3,8.q%PCn4-}{]]%kJ/N&a4dN~/LQ9UZ>z.*d5WZ%ui=kVE(PQC}o P');
define('AUTH_SALT',        'v,fMY7QTrB2Y8s7Sj;qcIitNZuQJ!Q`3v@&`iQz{-sY`4a,aOpIc8C`NF>-st<Fx');
define('SECURE_AUTH_SALT', '<S%6KMDo6,FzSPdAypj.ch7pcr*mg~<wjPZSC0Z4sl7-2dvA-%kF0:vo?Nbz8b#T');
define('LOGGED_IN_SALT',   'kgDJY7tv)J]nfqkiYvbd}j9e<x>&5zqUwxHk7 tu=j(B+<xk0Ic.Xd*3.L9/?jcH');
define('NONCE_SALT',       'C5M_I)g25%pEL}H[~gvRIy6i_w<0~.7fr]mN*^?Oc0ss~[KEyufU=9uP$x6~n*v*');

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
