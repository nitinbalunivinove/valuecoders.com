<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define('DB_NAME', 'valuecoc_newtheme');
//define('DB_NAME', 'valuecoders');

/** MySQL database username */
define('DB_USER', 'valuecoc_wpblog');
//define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vK;;VhPu*Kb{');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
//zoho crm api v2
define('CLIENT_ID','1000.BMJ414JAF95SXHD4YKRK0FJ3JC57VH');
define('CLIENT_SECRET','e9a796ffde50de7a3198d63f134196d125bae343d0');
define('ACESS_TOKEN','1000.cae698c21d5f8adc4f5f8e1ae60a3c39.6008000ac10c5df23ebf773f63194b81');
define('REFRESH_TOKEN','1000.b4d2d568df487f80bc73675a27101c45.d7cc4b483d0157d16f672e86dc354d62');
define('SITE_ROOT_URL','https://www.valuecoders.com/');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(1s;vK3_vLx|8-!CM91>o 043[4{X/9Ap8+8yfuh3 [D9J_:cEtdeE&Hu%pXY@L@');
define('SECURE_AUTH_KEY',  '/z)KoC#FOWKXdgZSr!_z|bhMY.^Rl=M{I|WPo=1I@9Ed8T+0N,eQw0XP(lSk1Ps)');
define('LOGGED_IN_KEY',    '^5Hce+3%Y;JbT]KS(-$]+P*f1ig tUi#CyjMN_$mkQKmG0.(.6rBw=w+qJ]QGy~[');
define('NONCE_KEY',        'hr}kU$i|`d;-X?d,cbs*cD[:A!Ib-;pcUVAKv>O-tVW~:3N~ ie9Vj:D<6|*l;2~');
define('AUTH_SALT',        'XVpL#f||?wQ[D|jH*Ad:w<-PCNop`{CTwUb[AyG?#YY+=nuA+`VIfsyNbD]`&@1C');
define('SECURE_AUTH_SALT', '1/Skw~8+*l`{Bwz0 _;HWP;GT5VU6tNsN}S<CATk%k,mSs^olO-GxUC0yyK6#0`V');
define('LOGGED_IN_SALT',   ';4lhWe^IZ,l}&3YTL.$Rd#(^q=mSUY^[n?J,oF)VK;8+85SJOm jB&Y~4YE>+9~H');
define('NONCE_SALT',       '@CgJ[- BmqwLhq2-%J 4~Tv(m~G|k+.U,a@vmReu;<lPm-pgF@cXBv):E-;A&Q_M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
