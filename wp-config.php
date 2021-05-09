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
define( 'DB_NAME', 'samo' );

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
define( 'AUTH_KEY',         'f_;MkDS8^TwxwKLC|G}Vk} yo*$EHB~Glb`(0:lz%YTm&-#&.Gix$M*G0/uqZLHt' );
define( 'SECURE_AUTH_KEY',  '4&3,;.Kzm-7K&F&tP<yY[Uayak^>A>u%*V~yV|G^R[;~*})1?:^t]~<9`&mR++uN' );
define( 'LOGGED_IN_KEY',    '?r{KgDMZGyFtFYw_#B,)sg~?!Y_f.%1NtPIgI)gwfaoOtBm[jdRk~;b1ysQkQxm0' );
define( 'NONCE_KEY',        'WFOY^O7auVd/gW]udHBPUH&Hj 2~r_R)dc*8ZmT=nB*R]|,y9;.opbpvjcCZaP_6' );
define( 'AUTH_SALT',        '`6]EBOKJUhODoJe&,A[cN@riM2-_zMvz8_v!-[`U]F;]V,WAf8+Q-@[rid/K=d}x' );
define( 'SECURE_AUTH_SALT', ' T>([w,yb3!A;q>Rd)JBbz@}/qk!C}9]ZstK8Gyv<,I?Zfhqz]Hq$^D()/?t?W4>' );
define( 'LOGGED_IN_SALT',   'pIa)@LdDU2EONmOG8Z:3ke?T<e[,x/zza8L~=CWcoSYVh+@3v#np`P ~HPqQbB0h' );
define( 'NONCE_SALT',       'j< h-^0@~w-UFOPY61A?%>kgj,Sz5B>.jGV4pi1+=3:7C+ty5P<pJm<CD.^1w)MT' );

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
