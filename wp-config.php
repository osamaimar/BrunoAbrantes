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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Pw}z;N[W}?#hGkVeFBIR-=Rp*i*3Q]~0xA$>cyD;-zq.vT++{j|i*]&{`#hP**QF' );
define( 'SECURE_AUTH_KEY',   ';6u|!;$K0^e=s~E.0CK#tm!L?]!R2u.5>u_~FjPP!B$};C<Q[9[sb,dXIjEa&`VP' );
define( 'LOGGED_IN_KEY',     'PXAxvKv{6thR.ZymiSTWbWKpL25eKOa`]Z)xAL-o{%t?5PGV4)tAes[HD%Z}Ld%3' );
define( 'NONCE_KEY',         'Fc)b)#e1PPAfn!`!2)@r..8%IDKKrRsGS+}pe06kzK^Y2Fx)xp$!e[m6CinTC~Yy' );
define( 'AUTH_SALT',         'bx(DO(>hsIfv*mjSJ[&|M[~&h+;=^[p=(!B6hucX_RrU{co=+QPYP`8D)[iW#edl' );
define( 'SECURE_AUTH_SALT',  '57yX?``&WZ^6P-_xh/=&%frh]4$994`z$@,D(VUl9Zde&SZJ(mwe}1:[32!ke,}e' );
define( 'LOGGED_IN_SALT',    'u4?-Y:gRR}4?qc}.c/L`@H __XA$h/+!ZEesG]*k]T`@QS^fGz8{HjN6E~moh@Jy' );
define( 'NONCE_SALT',        '(rp*oFh@#wFJPhmZH{b!]kF1A!M>:|[5]B< Tx&s}TYMy]% o{m`BRX*14}v&K:;' );
define( 'WP_CACHE_KEY_SALT', 'OkG^!isWd>-,c=N1?zSW=5?{<x0wR@C~;Erbdhg]VPv]vi+B,^) `raad.rqx{l ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
