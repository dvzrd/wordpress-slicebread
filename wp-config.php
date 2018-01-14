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
define('DB_NAME', 'slicebread');

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
define('AUTH_KEY',         '1aNHh dzF^7V?t80`6%V&,kcQ,Ugt)ledH06@toEFWY#]1:TMlzj^*y:WF0`KLb$');
define('SECURE_AUTH_KEY',  'ML(4n,#Du/3XYgOt_QlQzZ8e6oJGrC3ej`,%5j#/nrL&dJKT[+OrZP{I.LAC{:,|');
define('LOGGED_IN_KEY',    'F,J]dtG_wL+Y=[hR9O(Qs3l]j}4ME/vrVRw6{TWFTo0szR?J@cF(L;}_KR{YCd0(');
define('NONCE_KEY',        '&}zgXl`4s:#T%^[_#2 L)!^6)&b3QB[_+y~BP(__&1*+08*MrZ62,B<e&PqaECc5');
define('AUTH_SALT',        'TKNd,rLYxa-MQbeZG3e[Dp8U}k9XZ:IB@oa!.*CK8m|@1+TWHws-v[3H- }~Q:[e');
define('SECURE_AUTH_SALT', 'Uv7edhoeSuGm4_ u;G6VP0qSCC@6dJ>/@ol.By#8n~nTa`0;4A;uO@*fJo5np-hB');
define('LOGGED_IN_SALT',   '5NXseJ~.BB@Q>d~_@2eI&Smsdg^-s2NQd/0p*|GLC4^q&yVL=@w{2iWmiTow`s:s');
define('NONCE_SALT',       '3WaKcNu%>{Ef*gxJDY|yaU&%d^U.l?$0J/0Q=~h[<_KPB,%4RrD}4$K{[xF79rt}');

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
