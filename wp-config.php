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
define( 'DB_NAME', 'newwpsite' );

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
define( 'AUTH_KEY',         ' ,p6.u(h|gdj5Ie:eYb1fX! k#]KR.f(Z2[jux07;EI_Z0)~QU:p RiCpHtra^)R' );
define( 'SECURE_AUTH_KEY',  '! -V.SfJy~ueRICj[ryq+}izac@7KEsC[udKLQ9u|u:b]zx+kZdW7?(D9or{;esG' );
define( 'LOGGED_IN_KEY',    '.ua`_acGG]+ljTcdxHT/Lklb2+d$_taoETu gBJo{QUScBvLwRoGhbCPHcr^M1;3' );
define( 'NONCE_KEY',        '8D3E!0A#s:<cNoixK_&mmTSB3jTQ&i2o&8M<u>/FrEs_iP`1Qx;.f8m}#=~=3gW:' );
define( 'AUTH_SALT',        ')xzr)WVz*IKk!i8mI45w}@#*!4j3?d1%S]e;?RB$Cf$6>*9QIiDeN!=j !aV?hw-' );
define( 'SECURE_AUTH_SALT', 'kNWz$2wT#P:MI>McLN,C^t@zD};_ZM}_0Db87P+_E200FV=ssc$dW5#{sO|BjG*1' );
define( 'LOGGED_IN_SALT',   'uDE!jG2>=#8:IYc}ZMJ0gR64u4yk^4fo~USGnD.b;GK:sKUmM:t~sWoU%!(B>`/@' );
define( 'NONCE_SALT',       'p)Y?Y@7.Q!<3T2o%.g)9MLzXFK%kJ?=M3Z]+Yu0ISv&=k^ELa/#K_Q040Q|%BM$>' );

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
