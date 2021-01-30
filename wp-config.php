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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Nn%])f(5G4.e0,qjxs_K~wcXO+:~7WN>~S9*_g%UKDV}G`7Uzj}%3s8)^-Zx;& X' );
define( 'SECURE_AUTH_KEY',  ':1Xb^~lHID$E^4J{+]>A3o_O.}:p@@s7h%OD@^_O;/HQrqqB0X{Oz$)_Yk Y60T+' );
define( 'LOGGED_IN_KEY',    '{3>*Hu^Cj^?J]0UayJWtA!h&S%a&H0/Y:<N[;._mejJ;3=pe $*eSiHi;1seoCYs' );
define( 'NONCE_KEY',        'Z5G`>^?&*)8Nz$:KQi&%Nhez4d#;g)8R+{pX;_#Z_jF<PR@]sAyuQtrS5dwnu P/' );
define( 'AUTH_SALT',        '+=oA10fww$>hrC;Unui{aTnS;W+rVQ;}Xi9kz:@X5/kKlgT!|$WcXVoUxg</G|2$' );
define( 'SECURE_AUTH_SALT', 'L~dV|+Od)t7d;wn{77Wy~ UGf&R]YD:g%ivExY`1M/#yJq<R*_}.y+a$M>O:nvLz' );
define( 'LOGGED_IN_SALT',   '1BJ*,6ZPFJcQUm<6-{19#Pb#{z`R@P#zQDr17V8`&fShpF`kRhXa5:_yJsV@ejOY' );
define( 'NONCE_SALT',       '3EuEUxb>{M z-tu4,?y&x%}RC~PWV0~%~LfxgqJ): k>-[eWjUGSrI&Papn#KZM2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
