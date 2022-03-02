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
define( 'DB_NAME', 'shadab' );

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
define( 'AUTH_KEY',         '_S6;*UoWv@#)@QPuB*wwWZ[S XqG%m_~4#6RCAX^[wtd*?,n-+.Y|DYcL=lCz0iH' );
define( 'SECURE_AUTH_KEY',  'C09i~-B@|iT>nI]cTQhz^$}=#4sN>gL[;Qk}{`o%!*n3+FKrbttOE7[2uFZ*#TE^' );
define( 'LOGGED_IN_KEY',    'g#Yl/WNz@ve*q>74 <Z%H<?j2O`##|qXd!2g[vZo!Q_jVq+M.W4Iuq!OWoy>#{#N' );
define( 'NONCE_KEY',        '[+Ia_-]C;tCN!amp.FN|doPf,{YQgA3{+%W@a|@vja[Q>yo<.4}Jgl=g&0@F#^*L' );
define( 'AUTH_SALT',        'fHE><5Io7aDO$@PKL1?c(9:CYn7D;e;Ut<OG9Q53(K=F}.P_3T19OUs>Bik{t,eV' );
define( 'SECURE_AUTH_SALT', 'eWm!BZJjNrwGQ55GJ:x|PG_u.J.-Nhsy.B Ka+s AZ/:mhZ%r4e:?&D&ejoH(x,a' );
define( 'LOGGED_IN_SALT',   'M>g=}[boOJ$)J&eCy~zgt=trn62;.;;<#gtw`36y;2Ee<H}l{bJy,uHHEFAmLQ^u' );
define( 'NONCE_SALT',       ' y[_.85o;I7~iWExkN3$[F|X}*Zy=&IF#V57aP;lFUgXi.{p@1=^5|6Em?X[+~*I' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
