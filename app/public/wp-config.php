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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/akihiro/Local Sites/sokunnu/app/public/wp-content/plugins/wp-super-cache/' );
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
define('AUTH_KEY',         '2+CO0Pd8i6u/M0wS4Wc6jpkgiyS10/610fspC6D+fmVC/w5LOntrEexJB6u2AQhHXFRYr2Q63a0MPqRNPdtBqw==');
define('SECURE_AUTH_KEY',  'nbSPRzjIXDMj/POYvMLzWBNo2XsaEvorJtLuJwHMZsElDsKI3eWuDrk4H+DtcmByYjAIbu+TLQfVbcxSa7hTZQ==');
define('LOGGED_IN_KEY',    'jcjO+hKBvoGV5BMWRQedhFm4jxPbJ0fz6tbOFyccoh7R5V4QED8PZMkgDVoHe0T5fPjpJmKrUhv5XFVIngczYQ==');
define('NONCE_KEY',        'PpbTLPe6U0wT1JZCn0jJ2uy9rX9qeaLg3UMvev1T8yffhjR0oJoWZ4zDFMvGrD9o3ofNHbaFFyJ6iGDc4nO38g==');
define('AUTH_SALT',        'nSg4/Iy5lF4jxJ7BsuAUTCW5MEN7cF252jm9S4eFHoLAw30uFK2qDjNqNZG+JpjnvLLceJ0e3FPdtQ5exF7qPQ==');
define('SECURE_AUTH_SALT', 'NH3tQ2C0I4tZY68An5v9Dqj5S/FxuT+nL9b/dySIBI1cRoOforYE0AfC4ftHResn1SREoWJnA50QSavtWc74UA==');
define('LOGGED_IN_SALT',   'FOjE0jlMKyLJ5e0l+5b+e/qRzYR9A0b7ykgoP61GVFmWFLhThHJE5kjA8BTxNjbUgOQkoRbVk/++ahQy66Co5Q==');
define('NONCE_SALT',       'sEKXjMOtEcxEJLVgvfREwHfyiQWkZSW7m8ZF51wFAxR8qArXop20uInGe3P+iOe7hhidx3SspxpUTyCoquK/6g==');

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
