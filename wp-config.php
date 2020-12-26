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
define( 'DB_NAME', 'cursosmarketingafiliados_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'G|n{tHQmdPa^J8{qNXI>)0_$,z9,;o1]B+yg=x1DDs4n_i|U3u180+~M:vNdGkUB' );
define( 'SECURE_AUTH_KEY',  '}*EE4pM4#u51kNT/t,prA=4O@~D-/;A;OGiYNfZ~iZJ6ZZT66%5edO*bc]TTt?^+' );
define( 'LOGGED_IN_KEY',    '/|@EfR1~<J-P/^hlahg_Ncy+{[A3$pu}9kok:Gv3%z{dAF3<06?qWOS m&=nP%0y' );
define( 'NONCE_KEY',        '_l=VpRyPft}*!EGyva)o%`+OeR#188u @1RqjC;7_)B|M;]^kD[/$(Gz8M{cR#i,' );
define( 'AUTH_SALT',        'ZyH&;MZJY00_*+WeA!3ZQWF3>!=,wCR^C_#(6#<8XloZl- _P7ysx#9A>u9E4N]6' );
define( 'SECURE_AUTH_SALT', 'Ea|sk}f3XBhN+EkgjyU9?T{VC%< ,aj;w} g 1{xcK[T(qZ4zNg#AZ*ADNa(MW|)' );
define( 'LOGGED_IN_SALT',   'rXz*5bU2wj4xMm^jU?+)}Xd/2y ]~^~~YDXR,P_!zYPi4ek@!/CrW-eYk^L.5%/3' );
define( 'NONCE_SALT',       '3hq|#+GY5x|54j2P#C{v2u3R9!W6?]!,u}n,sM7^-uR=0jB&3>0XTD*X4jgU|2pl' );

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
