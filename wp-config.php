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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K/+gwNHrW0VN0F2wgt30vWUNgmmokOxVi0PWZ+hA1NyebDMSgUXizFSyKTrfC/Mae2DFOfFQ0QAH1Hvfslipbg==');
define('SECURE_AUTH_KEY',  'U9qVYvMujEQ8xgZi10AxJdl4DOUpA9rXIvU4C2Ln99hDBg87dwUB9YQ81YjCrqGSacTILdCjq9HgUwE5lFqtxw==');
define('LOGGED_IN_KEY',    '6pOzZY/seFpoAsIpotNj+3zzsmEiwKx7MtBxFOtToGhDPWpJ8WLgMclCwHyMt9oxjsfPvcJ9GEhGeNpBq24s6g==');
define('NONCE_KEY',        'gOqUao9oUndln9RxE6VThhIDg0d5nvBbHNw38QNem2xZI1n8+JgQqiHt6R+ppgTppZyBawQXRHWrCtgjJLEQYw==');
define('AUTH_SALT',        'IdInlXsTUT2L+HyODiOBjhXHm2yh+l5cM4eqPrFfD8pk8SwzYDbK+pNoQWmN7DRSGgMTCX1xaVNT3Uz2MAcUvA==');
define('SECURE_AUTH_SALT', '2mykEsKSoktaR8kCkNQTFmvrV6Wzj0Jc8dkMbGVNCt2KxUzKg0tkv/oGU0XfU+vB7wqHV25lfSUkeBdAP+/RzA==');
define('LOGGED_IN_SALT',   'lEi3jmgf9m73KXmyCB63UuyUkedoDIzHz5mXPmxt9QiSJr3k550hkDgsMnurP3QXvAlktPtSGWT4nu2NPXMSjg==');
define('NONCE_SALT',       'luNiCQGAAlDS/t5sOmsivDYSnjllddvmu+YlLONdR1AM9v6WyHHGV9iOdRA21D6aekjeNsroUCF/y2i42+kfJw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
