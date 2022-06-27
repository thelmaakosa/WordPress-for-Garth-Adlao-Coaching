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
define( 'DB_NAME', 'coaching' );

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
define( 'AUTH_KEY',         'D[b?#n`z 5HH 7rvC.kzc-*C-oz$6of>n@2Wb^WV}]Lo&0J&UG8Q]C+i0F~ohoU-' );
define( 'SECURE_AUTH_KEY',  'JTMkfm{8U>6WNwH^)u:Z<6J4x]&yqeH>vuL*2J&=~s=4UG0OLB3Mjq:T9BQU/.o}' );
define( 'LOGGED_IN_KEY',    'E- HYrNRnXE,c`{frm`Uc&:&b8c<Z( dC,ox`l{f#MAX~V!6cf9wPKTYXn!/~b<<' );
define( 'NONCE_KEY',        'Gt^5~]t{RU@1{GOcBK_*v@k,#iu[-TQ+e<-WQR/_>BVM7DAo&H)$MQU~=;9OJB_m' );
define( 'AUTH_SALT',        'fhLEV +Y(TmgK{li].88v=M%tN L~_tM+,e&C:vjBh^CPWZFPlOpkoHrE;,@7~BV' );
define( 'SECURE_AUTH_SALT', '@bhswS;,E:rKk9^Tj8}Fh<^#Qb:/n>OF}f60z%Wo]GmOUps0et3>FLSWp!T[d-Ji' );
define( 'LOGGED_IN_SALT',   ' o;P@t`^&wpr4eKywrN:ck^_<uuBL`:L}:LL%no{A~v<DH(p6Br%h(z8.P$M!k4Z' );
define( 'NONCE_SALT',       '1iY^lt2Y}1H$Ta2lC#Q3:xO@slJl r8NV*rAa~^MR~@yHVecH<IbL!RxAX/+<cF2' );

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
