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
define( 'WP_HOME', 'http://54.215.162.163' );
define( 'WP_SITEURL', 'http://54.215.162.163' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpresspass' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '=OA@0L[c9aGW%Q}A5zSa@#vQ`FMFeIal.Oz5SrtR+V2*LnqtD~Au+$lP?|rxbi{C' );
define( 'SECURE_AUTH_KEY',  '@26](EK)#LErMa_Bpt%GdRLdK[2lPz6Hx2=B }V<OT,;j<c[2,|R)*]IG;o2|.6T' );
define( 'LOGGED_IN_KEY',    ',4UU$gbE4b8>le1q@Y^b;o62%(1X2I$CuVcW6eK?3[gq9M$i4k?8f&e;}dAmpL;f' );
define( 'NONCE_KEY',        'Y4~N0qfgB`cV<`CKNR*I;;-]yqWID1L^(;WOarA0DBITsiP/[0$2S7IC67%!YXr4' );
define( 'AUTH_SALT',        'Q,hL#<~?$_VW;m--?M(j2Hqf+H)Nn69B[EGftSzgy!IG`zsMe%r-%A3y t$kI_)T' );
define( 'SECURE_AUTH_SALT', '.U:Q&pU!&.h<R~*,o0w*-GlXxBE$#oO1#k%<+5(JY5(ZOE2g@OD~+iT`$h!#$>T2' );
define( 'LOGGED_IN_SALT',   '| KmbD^tj!ls FN+:BOpP{8xw9ePv?Ay-,M%1-@#Hl,81QuJ!$ <EnVQC0/Cx.%B' );
define( 'NONCE_SALT',       '2iICYMQG>7v7E)V(0W-@n(&b:G-|5<v;hX?w${^7D|utaX;fJ_|`{F&fMTTlKf?{' );

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

