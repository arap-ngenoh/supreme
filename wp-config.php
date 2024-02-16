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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'supreme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Coder1234' );

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
define( 'AUTH_KEY',         '.w3EFmu5~-_RIk_ C<Df>rzkh,iPDf3n5p<bmJ,eqUa]?b2MD%>!B]w.vpw_qa:m' );
define( 'SECURE_AUTH_KEY',  'ni3m71k<Dl)n[ELQ]nZ:n?{7D{%0c-m6%yC92;wJVO[x9dviGA},i>:c=(fK>0lQ' );
define( 'LOGGED_IN_KEY',    '&5}=2<ylrGo(A#APZFS!VLSz.?]j[ZxX:rPrGx3u3xXL0XoIqun.!lcvCQ%Vdg5~' );
define( 'NONCE_KEY',        'PfWl,&{$l{A)-v& |Q7k0IP<}3sU/M{!}[Rs*1GE2d!daXG~D|f%lbMWEhjz5~6%' );
define( 'AUTH_SALT',        'TbzlqaxL#wUF/+@0SV&E@=x>(UL*|lyE{,:}(K~81I{DGQXCVZ2GZmg{POHbv&Ir' );
define( 'SECURE_AUTH_SALT', ':DU?1  a5.V_k!xT0uP*pdFQ_P?::e3VI8DnC/ellX~Cq_:7uV{-`jtR_l(_D9$+' );
define( 'LOGGED_IN_SALT',   ':H*ESGk1cr8$Sx>BlN*Ub3QD03Xa~/1R[3eS12&KjeLegX=]K/BZjekaHe{MTQct' );
define( 'NONCE_SALT',       'xv^iw6I82n%#Taf84%NE6&QN=&c/wQU&~:[B?L@9x>t`X mHY~:+RlNA9o!Y]3J&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
