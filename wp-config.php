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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'leonid_db' );

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
define( 'AUTH_KEY',         'V~[G2F_1 Y9G1]Pphba(Cr}X<)HH*.?/y$s|<Ct 89t``m{b,s3u4|eWOBme/,a^' );
define( 'SECURE_AUTH_KEY',  '=EH 7I8kR1JU8Eu?-)1!}OzWP5;IhaX$bnI2iE~1h?>-hn;?uB2K[xRlP?dr%c_J' );
define( 'LOGGED_IN_KEY',    '3*9:miImI_@X}l5.Q?KrX!yRo?QX]u|dakq[:11Ujs`Z.XY`,m O` 6}PUu1IWBK' );
define( 'NONCE_KEY',        'vMC8GQ<SiAF!YU5zhmLc;l*X2$1(Z0MpT:ns3Z&W+??myI+bSWGuk[):00L(rjS+' );
define( 'AUTH_SALT',        'vl;`wO? s,+0P.,A%{m8x)t}[d2M/:=[/nqx!N-|ta>!`g(?e)Ww5nP2*!*@tT7v' );
define( 'SECURE_AUTH_SALT', 'A`-!gesGydA}6OT@7B[{APLNG=PdII`^=O?.jmbu3GGf10|%w;~B8}}E{1Fvydml' );
define( 'LOGGED_IN_SALT',   'a-@tZV+ Sf gDJ1vV]B#z9t/Enkj8?T>P]E4u/zQ[J!_Z3(jia>x/3y.xl]@jCj3' );
define( 'NONCE_SALT',       'CYLd`EjV,w/ZjP$nAf}1Ahv}4?X>.[KVt0a[?WlK:lM*#XFjmo?@g{j-CFsC{<R;' );

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
