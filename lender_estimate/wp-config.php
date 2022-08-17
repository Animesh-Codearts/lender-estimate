<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lender' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',]WIDD.T$X[>$7F(A^G`?lx8>X0as;S2dw]FFXzRqT;,!`aUJD~7`@Zz_3kWMTDw' );
define( 'SECURE_AUTH_KEY',  '$A-oPe{AKD]@ED <I8wo!CURqcRsH:t5dP9A>45BX&r/=n{Zo!Z:&0OI71>8OkOi' );
define( 'LOGGED_IN_KEY',    'Cs7XlN8_P(2tare<O/Wnt}z7F=O{srwZr6^*[t&We#Ia-z=cd}-9L2KM_fZpTpjy' );
define( 'NONCE_KEY',        'L&QAo91b/u^cI3F&30vq{XkBP&wCgEkzg8on]brj&]U!Yu[;,i<0](?L(z$]tt(T' );
define( 'AUTH_SALT',        '$*kb~*bK`auG{3b6j,O;sC;_#d&A!4#oTWJ{Y*V%. u@K3aF[%Y)u>A+Ua>/^$%x' );
define( 'SECURE_AUTH_SALT', '$ii6zaE,jOq9=8+`6T, A?7( b>R,0M#iG[/dgD5c.bW!_mO`5xsF4KyS@yBB;Zm' );
define( 'LOGGED_IN_SALT',   '~Z::9i,OfM~A}ng;_ pmoT%`ml`ZAQSD~m8wsdxZ^j{o/kj3BxJGLb:p7/!T4dmS' );
define( 'NONCE_SALT',       '%;bFOaliq/u)jp`[/q7<[u~_5v[y]<TNHx%uN d3&JfYIBktr3n&@,Ki,*6s[wDd' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
