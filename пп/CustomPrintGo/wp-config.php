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
define( 'DB_NAME', 'angelina' );

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
define( 'AUTH_KEY',         'da,iAmCt_*@oxfRLkY<5.!@LN//5=J6X9:dy)DUisBBIoeNn/4mu/2/}-m*PA*+Q' );
define( 'SECURE_AUTH_KEY',  'uhLW<0(fz[*!)3,YI0$Q[;IL0#Zt)P1#S473WlA]hl]r3KYlUh,hB@9+]Pqa=AM9' );
define( 'LOGGED_IN_KEY',    'CD?-%zc*`qPoX6|daTd2+#IXoMsSDl`LS(_W Ws(+-)MU&xhi/><jlTTz)|^H~9p' );
define( 'NONCE_KEY',        '+n@)-X/f_<Sch7_m(IfFDNd|:z}(iQTS}QF=Id%xsU`6mw@4=$)==X{PX9vZ}d6W' );
define( 'AUTH_SALT',        '}jR#T@j~CuzB<iXaHphmkp((Et&qLbt-!s~3;:E22x_M~kz7H&6f]U^!PO^l;: T' );
define( 'SECURE_AUTH_SALT', '/oW!*BhFjpK1c)fKq,WipDS?RX3&UdC<$8 C-$Rnu%i-*2#h9W Z<9GD]RbfMYE_' );
define( 'LOGGED_IN_SALT',   '%HeuXGk2Ll]cc>~;WrX%Ce<X2$CL=Tat.%h-=m@xvX7ma{v}Keo^&^x+8QU=O`W;' );
define( 'NONCE_SALT',       '6kSUCX`i6nnAa!lPiE1#e+a2kZVJ=>j]<U_XYWCl9|P~YI(KmeobtNC;{mmx#g1]' );

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
