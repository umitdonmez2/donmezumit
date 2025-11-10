<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'word' );

/** Database password */
define( 'DB_PASSWORD', '410632word' );

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
define( 'AUTH_KEY',         'P_&`&,1:?Za({[Y*|r^|x5WDAe&z zSe+3S!=X04E]#0m`=IYL$o|#}D3bP.[Qq,' );
define( 'SECURE_AUTH_KEY',  '>zQ=Kp%p`vk+Xzc]zTp{p9QTGW?VZT=}}is>T?=}:#8|Vq/OrjHZ<5rS~bE#xM0i' );
define( 'LOGGED_IN_KEY',    'hsZ. %[_QQ0FlILBrL8O+x(%5SoFqst=AE0D!38(,U(rOpuP(Sj`jma>Kn&5$HS<' );
define( 'NONCE_KEY',        'Z7Jrjhr}tRxKLB&x/%wN};%`NFv!;KsDk.Ehs<oUbP#e|)~$2z4,pFp:{zG-rJ0A' );
define( 'AUTH_SALT',        'IspVoS:NtAOg5:vJCe<yL+KW!FWOQKjQeKOtjtVVnkaE!fxV, h*Tt?FF<IJs[4N' );
define( 'SECURE_AUTH_SALT', 'CrC?7lS3tLKLpp9,Tr-^!<PEj*r? zQL}UIZYg0 BaB .TlIjH:ZM&/=B#VV6CBI' );
define( 'LOGGED_IN_SALT',   'H!EA[PD1!,wQbP$08y`%>1TWZT5)F*U+IX:FxyANUlS5}gnu#|w9*]Z}dKkB6S].' );
define( 'NONCE_SALT',       '#C(+XptWbDhp!>5^L/xR.8Gr_&cU4f~Xg4Q<]_3 d>%~igw.0vF&srUZ^}DH0PrA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
