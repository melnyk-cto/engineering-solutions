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
define( 'DB_NAME', 'engineering' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'PEKWAhG639i%k>XA/9c9XmIPZ<Q#&W4tyL)nqkps,g/[4t?,s>,7;4@Z=CX`Th`j' );
define( 'SECURE_AUTH_KEY',  'oLo9) <_YPs4j){o>AZ%4xYtm91)>9|R1iaDg.f_6_XKt)T}`Y#&aT1GPPJH6DVn' );
define( 'LOGGED_IN_KEY',    'l~HzDyAy] )R^Yc2;N*@iMHIOQ5O(=@$V{EriV/=f<F]Nmly54<5&Z|H~>.?PLoL' );
define( 'NONCE_KEY',        '1mWKM2Dm>=2:L7(6~so|c8glN7{0WO~Gn$.pMp#--X^R^>~>T~NY,!.]_SGv{Isy' );
define( 'AUTH_SALT',        '@sJdU.Q2`[?OBK3z|j4u.J[cT<apDUG9iJ%,gBxWH!k:5|sU/3YgF3^(h~;_-XD;' );
define( 'SECURE_AUTH_SALT', ')lk}49}15IoRE_ CyJy^gYW+&V{pv[xOz<]~O/SV/[)??;s:F|8_8v@L%:);Tj.f' );
define( 'LOGGED_IN_SALT',   'iayN1K1<9FZ8a&.5@jSQ;FDfqx7ZHk8OUzP{Qj^l}R%0na)e(H[t%.2a&7r,[>1O' );
define( 'NONCE_SALT',       'lH`^~SA=:9W6tii:Eu@@h%= _V1r:4)+EJme;B{GkuvY^TdmRp#%jPlsh^$KxJKJ' );

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
