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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresssancycle' );

/** MySQL database username */
define( 'DB_USER', 'Basst' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lindsay06150_Lbleh62313' );

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
define( 'AUTH_KEY',         '(S8vC+o%UBHcf%1N%^t4B)  YTozCs?lTI=3nRSS?/|qyv2L)SkQHi1oE 2yR_S@' );
define( 'SECURE_AUTH_KEY',  'J67w9/S|%g,{klF,%k[kDXZQV#JHHm&.qdU+Ybsq*]`)~.UsuMCe2<G0GzT+bXoF' );
define( 'LOGGED_IN_KEY',    'el;oZ_T-%cPUl2vQ+;L ]Ym#_c;RS7Gc%e23;ee!t9T>!qzy,G*eNk!/ah_BS,[V' );
define( 'NONCE_KEY',        '!La1=1xf$Imzj<cDj6SMBTQ3hC==Wax~apKQLE)@0u(xmL)P: Q9:6o-reMr3quv' );
define( 'AUTH_SALT',        'yJ|`iuI/,/FOU5L`r4;FSSPN`Fp$UrTX#T0O2tp2fEz#3&/9,NWSY|}/QkZRp{NL' );
define( 'SECURE_AUTH_SALT', 'xuW2|WN)c`k<V~p($OEUaRk;arLr;g;&,C3r_l?Ow3,OEO;xLx_{Ip$XGja*s67l' );
define( 'LOGGED_IN_SALT',   'qUhO}#s e_}7hWfjfVr1hUrIF0alO?YCg(iK,,Mq0#w9>UbkJVHy9@N:7I.Ygp<i' );
define( 'NONCE_SALT',       'DRm#+Z|#wrNrcIx(98TJ]2l;}b!b GJke%|[6ymiY[P,$yAYG.vMKyD,1&}(Of*8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_SancycleMoto';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
