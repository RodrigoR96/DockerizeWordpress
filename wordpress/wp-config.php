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

define( 'WP_HOME', 'http://13.52.251.224' );
define( 'WP_SITEURL', 'http://13.52.251.224' );

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
define( 'AUTH_KEY',         '9V-J:FQI.sF]:?=0:2fe/&y<xC&7>sfw#+XoN1@yk0$b<%Xb[Y9K6zbgx7|hM^Uw' );
define( 'SECURE_AUTH_KEY',  'o](s}o%1%A/X[D9b@Y{FplQMtubKaACgj!c-;*_]8CNu1/|[?46!`Km842oP+/>4' );
define( 'LOGGED_IN_KEY',    'A6 ]}A#jzbC4H`HE,>:~f%Z@R,yOpPGol5$hmq%0<B[Ub/L1S)ZUbjaQUzmjL2q%' );
define( 'NONCE_KEY',        '+uEc-;Yy_3f7`yL_6;,ZEn#0rfVh~fKo ihbO&P{zZC<]:{3^N<u_cSC}@qCx |A' );
define( 'AUTH_SALT',        'e+g8r,%@MvQo.%67j${ei.2B>zEmwBg)CBx}FMhsrS2xJv.:1lyTa7y$J,k;mU~9' );
define( 'SECURE_AUTH_SALT', 'MCMdOxxjTzvX6Z)RiWm`aH@0/cEI,BOAwm9he;5v.+2-hjR[s:R;bX]ysfx%z1>1' );
define( 'LOGGED_IN_SALT',   'ckh2_N80x@4HmcW+j7-j)ed`K1HRg?Ehb)76Dr|h(@QN-Oz%nO2$>`)yF7P$Q-;U' );
define( 'NONCE_SALT',       'jhfNk|`(Aztog[|itC 4>$ulPPT)Lc)75tZ8qmUg3>^r?L3#o{n,t3I/khlNk`(~' );

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

