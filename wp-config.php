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
define( 'DB_NAME', 'wordpressExam' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/TU7gIf<vjZy6HC!p4>Mb(I(l?V^-ks|@J#;G846EA {D(5:8OXNL9^}7ReV!-UB' );
define( 'SECURE_AUTH_KEY',  '{=+s^Cz^3X$KqJy)I4exZLac4o-ZR>X6,LW0A%8&G*J9vyDXo`wbF(V]pI*QN~jf' );
define( 'LOGGED_IN_KEY',    'y[hVnU^e!3hU/F-%Nw9)W17zdKclNr6hQIUsKC[7fQvVW/S[+trwE,my[0JD&*Y5' );
define( 'NONCE_KEY',        '3b!j.`qTBJ-) oH9cf>Zf^BST|)Vzi0e>N)x (P:QZK4|S[7$ONF.sxw+|Jp0&pF' );
define( 'AUTH_SALT',        'Y3|~V^^uiU-$lr7~?wex@$U{=&F&buozWD}} ]/{:j.|5dihWE=PX[ QcYTOl4c{' );
define( 'SECURE_AUTH_SALT', '*J6xUaqii%B^<vHjIj41oVs0Kc1Om%VM!rd+`29p>ULG+&vF;@V01^pL8>Orc2}K' );
define( 'LOGGED_IN_SALT',   'Etw#Qh;H6I3k)e}}}`fefZ80J5b@]j~F~>Ov+<qel8&Ycf6?^bUyb|!0PF78~flU' );
define( 'NONCE_SALT',       'p2^_`Rx+WJ|3h*pW~dd`)2iEd>#V~ (>MX-?4fZ^2fa);l20{y=1H_L216L5HM6Z' );

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
