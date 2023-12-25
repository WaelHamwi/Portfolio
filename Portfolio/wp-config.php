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
define( 'DB_NAME', 'portfolioelmentor' );

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
define( 'AUTH_KEY',         'Ts;D++G-@={?++pcG!d*_;2+`FUTLug2gVgU<RXcbTa/0;TP{&k{V.PNB9n.x:^X' );
define( 'SECURE_AUTH_KEY',  '@.DG_b36P`WP7tnLg|96z@5/6r,A U*|a9sNn&ECj)&l~32aZvAmew_*VT0Q=6dt' );
define( 'LOGGED_IN_KEY',    ']|`NUIf&p@b#Vd)1A$7>>aR1dT$jxU>t8ii}qbYWW=:U~qA, rsSihM0e#XDs*~&' );
define( 'NONCE_KEY',        ']K;KK4@E/|Q{/FG4_Dp?VO+$hf7}[Cv&}N| t]HqntU4K<jABi688B6WTT*=g/LR' );
define( 'AUTH_SALT',        'Q{WHTCxYN(!)U=y%Q0cD-}Uy>.18SpTt.w)fC#W4S0aHBrayY:p/nxlN!yVB>!V0' );
define( 'SECURE_AUTH_SALT', 'lg5CDZ1>`J[t6bpQsM?dsUE+w|ml11%fFZcL!?3VRy;CNsE,,YH=mz mI(=R)5`0' );
define( 'LOGGED_IN_SALT',   'iw.yev{ztM$n5o8m{rvAe>[G69q1B6T*HtG~OhrJ~f6ZnHNxLeiE<<$gnQN[a$M9' );
define( 'NONCE_SALT',       '}jzB}_FX.2bKJ>P{!;*0T%X_ts>]Jg;?p_?l (,76U6YY dwipgT.zHKNv YnSp<' );

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
