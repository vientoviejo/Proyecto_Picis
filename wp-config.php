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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_picis' );

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
define( 'AUTH_KEY',         'aM,=o{A.<wEkxbpU#jUkQ,$J1y!-t^yZ&<4%o|MR|CI-[))HjnI}^eQ=}:ExXq~G' );
define( 'SECURE_AUTH_KEY',  'n 0_e[z]79?bgoY|]j>w Mbd=Nt8C>=h~-T1u33Aqxq?$Nz2/:QXlx,P`q9*OWqB' );
define( 'LOGGED_IN_KEY',    '?$0$D;R?f`TxM#XLK`}WQisCa]#0CL%2lcxw8U-v~<1TzL-U~:$m8|3GS3mzngpB' );
define( 'NONCE_KEY',        'vF&pou:~ZC`=G!0Q9l]pQqYu~c-~y$>nr&Ljb>$M[@Qx_8AsB2nWPemjJ`8urE3%' );
define( 'AUTH_SALT',        'GR~/~l~7{?+:*GgYg~9]:IQ^w{U$|qb{ISAm#fs.ABZTohO4WLkMX]O4v&9u^DZ0' );
define( 'SECURE_AUTH_SALT', '>uB!nqQ6E16<5CwW3^t**)Q`rz|Durr FeGWRU+LtIeY[X(HDSe$|0EJROV+J38a' );
define( 'LOGGED_IN_SALT',   'KL-M$.@%({`$D`NGH)3w`mcRP;PC:P3PAC{p2Tp25UEt8{LXa*&b,FcB)D/4y3kq' );
define( 'NONCE_SALT',       'UkS)=`bJWX8q4N~gf1`]1@3LX>bU^Rpe,54B^(9D%d6o,F!IHh$zgl;Nw%3pDEFX' );

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
