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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hguyFtgfR4r9R4r76' );

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
define( 'AUTH_KEY',         'v`Gj)M#mtKGs1wEg$RR,83x+}b!M.nMxm<8zKZApn=@vu?@43V0ip/+nIO`%5?&G' );
define( 'SECURE_AUTH_KEY',  '9G$4!L.^rqOsChe4w0Xg.^_,EI;!?3N[cW0?t/kmi76h8oYJ>xRe*4$S,:zqsxC0' );
define( 'LOGGED_IN_KEY',    '3x{h`g<|hz|btJJQP=%@psH%;) -7+@u4w33Y7.nO7Tapy)&4_ gA(D-b; 2~} q' );
define( 'NONCE_KEY',        'xKVhu*w5dPCt!),D8v;YDpIGOi!. ?j}1>ce@U9lg8h2TkW71hrOXs^CIRlh^_^B' );
define( 'AUTH_SALT',        'f~9.|!y#O+ri}|T5}#xWu=#1!@:&rAfCGh#W172(.KdbmX)eg#98OL4R.QCCBdgz' );
define( 'SECURE_AUTH_SALT', 'o<1B}F{MSi4q28fnZz|qI&X1oUym Ax=%4i}BT=#I.qYi8#{%)6P./nHon%xj}`$' );
define( 'LOGGED_IN_SALT',   'W*qFmWvPKBY(]IS5m5gky-%M+-;U(>1Wcp]K?x&$nrL%PMFRIH}N*{xo4g 8mge`' );
define( 'NONCE_SALT',       'oac PpbKp6^r1nZ2|)^^f([.=(m5,sd6&l)0fZf8O95Ie|.{(6NKl$UQl-V>m]m.' );

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

