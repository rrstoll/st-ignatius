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
define( 'DB_NAME', 'st-ignatius-db' );

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
define( 'AUTH_KEY',         '}.W+V]U.$1vcdkrJ*ll]-t0_v.TK>cPp#!+^%<t5=E_I[5N3+gQ@Ob2FgsnR^s:-' );
define( 'SECURE_AUTH_KEY',  'M-?A+f3 z}A~#KC$UcPJp-&pnQ64,j,4]wt*:i-umU4,o0[4)u@4^~-ZBh.olbtn' );
define( 'LOGGED_IN_KEY',    ',Vb7.eHZmnMNJvXd=DKXWtg#{3Du@v!JitAP~q6.&w?Q$wOh0Uj)wyrLb,T1/+(K' );
define( 'NONCE_KEY',        ';VEU8XfPI@.Hu*a]!`b<T$z$:*Byfk3.$2hKE&KWwvZj@KOMGBreZ tknh}V!Ayi' );
define( 'AUTH_SALT',        '%6[9v?{2K_SSy|1U:ANx~mIOM(I E4rlRQ-]>O@(t:0#9!:t1HTtFDl^xLqHl;.Y' );
define( 'SECURE_AUTH_SALT', '=F}$HnJ, ,FxfGZeu+8pt^YvNLD?9:)>ZBC*H,H4@w}&x]Bd!:UxL,UWv7,,rzZi' );
define( 'LOGGED_IN_SALT',   'u_,%9i;aWV6z=8D**2Uq0v)d-6E&eq> o9asYqiu3/82)D2P5,qnj[yQ,OhqCf@@' );
define( 'NONCE_SALT',       '<e$WesbM5/V^|J~FySS*q.Q+|5!~Jxl]vkYRm0z@ Uz?;@*k!Zcx[njD}O6P$% 1' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
