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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_vs_561' );

/** MySQL database username */
define( 'DB_USER', 'Lalitha' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rameshbabu1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

 /*
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
*/

define('AUTH_KEY',         'Nsd-]$o7h4 &Y@N345+h@Jn`M#an^|+0]kGtkPqyu|ZI%G|PWoX+&:j{&/_v89-{');
define('SECURE_AUTH_KEY',  'Rf+[4(O5LZ#i&??*n9wIyh^rS4- +3c[DarlPCh[7E&wPE|dY,dZ(mU66uP-FIq,');
define('LOGGED_IN_KEY',    '>48!V^Pc}/uX95r>]ym)ZiA gP7f8}q!H=p-!TA#5M5.]sqm;SqM+`+9qfO_r/y(');
define('NONCE_KEY',        '+8UC!2pD~x/=:d)k;eset5(aP0UYb4B[@Ta UG~C`!IRVDtrGJ3XI2D;QsE#eZ}(');
define('AUTH_SALT',        '0;K-fHe)RpH7_h|KJ1b0jxr#`ke:*GMx|X$ll-z|!;ENt],-y:sUW-D,;-xX )3K');
define('SECURE_AUTH_SALT', 'R6X${@qi/ f|GX**3qp@{Z}_yJ(iB{CFmV%a(:xny!hpM.R*|-53ybq7ILgZCTFH');
define('LOGGED_IN_SALT',   'NcO%Wa|3RHu!-.%(w6YqTc/Rc,S&THdDDA1@Whp4;WUdiCytA{sL0-a} |6MZ1]O');
define('NONCE_SALT',       '0QB9`~!X$X]2#B)ma[KsLtiK#-%{!VoM f-q%eJ%tO+3O]tTrqhC-%rI|.pFPQ[P');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vs_561_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
