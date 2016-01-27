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
define('AUTH_KEY',         '*;B+SuIlp kfC{G1HR-yv6%Q?nMQ1nk-k~BSD5>T@)f^YO,SNszM7d](+BbZ08ml');
define('SECURE_AUTH_KEY',  ':3!Nqe>Z[7+TMI(3DK3, ZU9yM|O|jwzIo0;s?85kqjtmk4|M2.b~|R558v$<{>a');
define('LOGGED_IN_KEY',    '9G)^>pkI6iaZZ!rw.Y[PJzwVO~#:~-4b43_XUlqVfkDk)6btt47j+P;XIm*rJ->b');
define('NONCE_KEY',        'H>+N[lroVhL/uVY6mo]-?R0Cm^U@3(o_nRPrto`X*1st&7m/(p)%=WDd=MF.z#Ot');
define('AUTH_SALT',        'e:=$l3;[{uvVk(G;iQFaRKjFAx{9ThN[k~eONu1b5Fthpb:>k1N< 1rO;T:8Oi(/');
define('SECURE_AUTH_SALT', 'PE|%M4%Y|sccwLMQ]CkQ.nW#:QC&K;EWy+7()}+^)b1c1ma^e-*(by}4ls&QS!Z+');
define('LOGGED_IN_SALT',   'e`mI{5{4`m2iwFde[-S}^g3LnjC)Ug|PFr4-9ZM^D U%p/-tD[4SM2ojqcCj74*%');
define('NONCE_SALT',       'b=2Xly9vpDHm|aALAZ7A/RB9s>|@XH7q~?h#st+??ga/|<A>nYF<o|c=RaHQ.9=f');

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
