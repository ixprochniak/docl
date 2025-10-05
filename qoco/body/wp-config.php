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
define( 'DB_NAME', 'corch' );

/** Database username */
define( 'DB_USER', 'corch' );

/** Database password */
define( 'DB_PASSWORD', 'DemocracyTerrible' );

/** Database hostname */
define( 'DB_HOST', 'porcon' );

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
define( 'AUTH_KEY',         'u?9x`J>wPK3(<:4!hbA*E )qHEBsbt$Pt6f0GoMW`7%dz}vhIGe,#j[2^?cvnlc{' );
define( 'SECURE_AUTH_KEY',  'RkyG:3tC+Gc?.%=@z4rQ|#vm=9[q[]Eg=.GlT)&T=dv:t>X/^Tv@l`]~YZ.-N f:' );
define( 'LOGGED_IN_KEY',    '5T 3oM7z,bfK~6}CRT9`vQSt,a)&%^H;V2|FufWT4%_?[Wk#ZNHPQ~+E^u]nU`N~' );
define( 'NONCE_KEY',        't|$;T?6(BI)p1-E3gJinO1kS(IX8a:{:fX&Ee+E ~a>Tf5E;`JzbD2:pU[.,f?f1' );
define( 'AUTH_SALT',        'H}#$Qq?h5@J_1G=}7;1?7BJOQ5S;bdqkApxez4->Qpyu#bT~g>IwG0]D1H~G2yLc' );
define( 'SECURE_AUTH_SALT', 'd4s*tH06FfwT-=pPfZeEJ%ws+cosX ;Idf`CSBOn)DbM^.+P`sJ1.]VERT;qusjw' );
define( 'LOGGED_IN_SALT',   'G9BnLOj@=|&Tw.H#PG(),<-7$)*#]GOt*u=s+_xz.0BReoQ?ayw(qK?[_;aEH9nV' );
define( 'NONCE_SALT',       '1IL*DHIpqrHXhi88}B~)un/KG]ShtQ>;YV:JS{Bqa,ppGWMg(7z`j3IVDm2g x=)' );

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
$table_prefix = 'prc_';

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
