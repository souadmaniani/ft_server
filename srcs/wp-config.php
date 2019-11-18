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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'souad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'souad' );

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
define( 'AUTH_KEY',         'n/Bcyh4tBdD>,vM]5X1}[+oXvo1?rlMnFV15[!8mm%P&!f,BB$TI0?AGu/Q*jqu@' );
define( 'SECURE_AUTH_KEY',  'tw4KgOoQI^GZ|(FG;)}(@|f62oz~SRoA1i&[=2#mdIr2]vS:!+m#UD/vz[nIj[Y]' );
define( 'LOGGED_IN_KEY',    'V^L86uIt;`<nkVpufxt$E(U4PC7yN&oTIL+OVAd&o3.-4[pB}|]~3LLFK(6o#UFY' );
define( 'NONCE_KEY',        '`00]C Pv}_b29g0hsIVLe%Fs[SjL,s*p>n.3]i.[I:(t5prVvwxajL{F)LJ~iSA+' );
define( 'AUTH_SALT',        '-40]hYEh:%_N!8I#,%kcXu]9s` mH.,MOj:j%K,2vk{@`LONJ}6G}H;voNP=PzHK' );
define( 'SECURE_AUTH_SALT', 'r[26Hb[%p5Ow}BX$r5DRgl}X|t-k_EL#-cz-JL(N43j34H)b&Fn>}RH4]Z>A6Wgv' );
define( 'LOGGED_IN_SALT',   '(eT^ks}d-o)hJ, fUp,?6[V.F92?1v1c B@{&8u]M=%)3Pw9bs#VWAa~Y@TIE,Hb' );
define( 'NONCE_SALT',       'KL$/E|jtc8YW4[t_95C$9g+YV=.R>q5k?dza`lH_gnLS73MGZS$a[RZ:P6VII9Dx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_a';

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
