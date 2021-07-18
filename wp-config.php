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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qqq' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         '8xe7ihRvB0Ii~*7GMb&70T^8wjYRmlB`wv^O1Lu|Ma(X:Mu-^Ra[@j{9~2j!jp3o' );
define( 'SECURE_AUTH_KEY',  'wBb.QLrZ:UmuvS,B:%3I:r-1:lu40L{<cb4PPX6667+$q5+Ldej8eDKLSH3Qmd79' );
define( 'LOGGED_IN_KEY',    '~6-b@2f,^[g#t{/kf^wOU3#wGWU-2?EpuYcQhSPmp2?3$jEVTAbZlUrM3arn-|.w' );
define( 'NONCE_KEY',        'a) )6Xt7%Kvj`QXjRddt oA,;V@aw!rcop}! l~9PMwQpb)sh)Q5V992_ 1bFjJ!' );
define( 'AUTH_SALT',        'Y6u*Z9rA&n!Yk*-S$e[_P)bFXMv(G0d18,4qJA::`Auj45Ztg^[U=<y[nk-}y)vF' );
define( 'SECURE_AUTH_SALT', '%r@P#hip/D]cSmMM(t2d*Yzvn2&sMgrRQpS8Zw5R!EzB752y|}OuNGt6 z#Cec&d' );
define( 'LOGGED_IN_SALT',   '/FT@=}|-4LQm&B/p0-ijk`[d?Cr#Q:u#2LxVp02qxjzaH/m*3sMGeLatm+n@|CLf' );
define( 'NONCE_SALT',       'VdRWB,TOc4pwuZx#-tIj`#/=B{{XKhsOPiEC)}D2),`fQZHYr;,-y14H|j%lvr^I' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
