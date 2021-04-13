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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '![_VGQ5;_FgnN(|#mqd0;v_N:fE$)t c%4.TE!B;~EN9L^#xE,l8b|>kB0=qF+Ms' );
define( 'SECURE_AUTH_KEY',  '97/lm/?w^G_T/k8FUV2Yk%1F@JuC[#KkLcmqQAUyexPjIaa8J;v~%WdQ_Hn>?d{j' );
define( 'LOGGED_IN_KEY',    '6VYmPtjhsZ%(d!,{OjJi|!J@_3H)L7[IMUVQFty])HPW,HsUhM&q^5{G9kv#K;r&' );
define( 'NONCE_KEY',        'N>`ei9]`F^[k^y9qy5X(egC<Kw`r#uw{PF>[i!xPKpw,y/gg<62eZ:af%B A&tc)' );
define( 'AUTH_SALT',        'n T zBD71RrkFGzCUnL +WUI`][Nuzv@tlA@bLH<cm `P2crPAxDgHCc7)NXpZco' );
define( 'SECURE_AUTH_SALT', 'R;fQ A!+f%S4iy F>r7/j7v8rlo:H& `)[f!F6%$XQk`[c<m(iT IgK.#4~#*$q+' );
define( 'LOGGED_IN_SALT',   'xfo/uqAHy(Li=V=+BvGo2PHxL4Y;ni+h#t)6b0wHM}!M!HQ&-+O!ZS*oTIrMqo%/' );
define( 'NONCE_SALT',       'Ek;C40F9SRYN4F(=M<vT<71vAj,- v0@TH Ac<]s.]o*PK9dVA7sXgGbgQR{g`Eo' );

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
