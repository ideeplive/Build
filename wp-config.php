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
define( 'DB_NAME', 'Build' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{>4&lV~)f8Q|NfOEV<oh:#LX+?3R-u,a^L07b_}$ l>I7bd:N8%a$Bx%a}dhv[[0' );
define( 'SECURE_AUTH_KEY',  'tO7E]$0KRO5cD$Fd)Gj}gZ{x.fgpt|:($KONjq>|n,d6^Y$o,[P*:9k7nZ)$e866' );
define( 'LOGGED_IN_KEY',    'i)C$C=b95A[ssINbo=*@]4xw[f%Q)qlJjO96l;i0|BUeoT(t-xnM1$}()Nw>8u(G' );
define( 'NONCE_KEY',        '  ?eNm7DsY!)Wfy}_*z]/P7(!&/r1sILosNETTF{CBP|]x{,%UItf3OboF;2{#y=' );
define( 'AUTH_SALT',        'X&?.aim5;6:pmD3-T16<0Gz+[v-erT)A#1jOD]?q/ZDXo!Du^~:Tiv3F}S(tsK+O' );
define( 'SECURE_AUTH_SALT', '!MW8>qDt(*n(-Xiiu&Hd9cvbMBVPRS=^$=TC>*qbf4Mn[i/inq}KN,,v}ONG$STj' );
define( 'LOGGED_IN_SALT',   'BEC;`:NY3 eYLirL,y%~(FC$@,|&)(~!l9J~{3sa0lJw?0[^[[K;V%U}^XxY4vZe' );
define( 'NONCE_SALT',       '/e_pf:C-<nkMT6%Nr|  %agE>WAPV,zua&IZQp$@Y&ynV#Nx?a1=T!ZG2R7zOuP/' );

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
