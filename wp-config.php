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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shirthappens' );

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
define( 'AUTH_KEY',         'iZqdl-B?k%ada)wG L,U0C]c_NVN*#y)@5oQ52!^Mw!65)4)RIC=_;J]swU7$%Gz' );
define( 'SECURE_AUTH_KEY',  '6w16_%CoZ>SBi@zf1N~cEcZ>uIJ`DX0Q-I_4W<Zd%#B0#pJj%m@iuP`]=|5kacK<' );
define( 'LOGGED_IN_KEY',    '}LFdnffqHTL;!U0T^au,TA#AukT%t2hy d4e[X)v/GQN|FtzVxYH,X9Ch}mopchT' );
define( 'NONCE_KEY',        'R/QfgYGqD06wg$0?2HA>-JTL%A=}l}t0)CZr{weGU`GsT$zexR9aZ$~Z10[ShHzt' );
define( 'AUTH_SALT',        ':/y77K} TT@w=!6VtInT#llhb/^ ]2*ZZ`lB[,MM@_8~6k{myzjtBp1Y0|BK;|cH' );
define( 'SECURE_AUTH_SALT', 'Ev;!]i;-R%S?O5sUYOH5l._Ld@Zz]9oz}S>Gw..{wSSuO`S~%HD/@70%<;#B@k;#' );
define( 'LOGGED_IN_SALT',   'hOmmpalaS,pp}eNC]e$>rEv6vASt/Ms7]V-:%:n6ovL9<5HtX>[uIFXDn2Kl^Kuc' );
define( 'NONCE_SALT',       'O+u!UgtO_NGBT(D.Y2_cO[LPi=z7^]7<d]9&%;dKY)z-n%Z,l+rCE.m:z,koECxW' );

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
