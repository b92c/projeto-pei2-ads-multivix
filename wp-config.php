<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pro61805_wp265' );

/** Database username */
define( 'DB_USER', 'pro61805_wp265' );

/** Database password */
define( 'DB_PASSWORD', '-S9Qpf1Q5-' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'iry1ewgq9msihehst2yhz5qjem1sugofrb1k5icw18feuar81ftkddsftovz7ydz' );
define( 'SECURE_AUTH_KEY',  'qlimuog1xbap8zx0v3qkycget3ooyxbahoskyseyics2a9rdw7isgyocpi5togce' );
define( 'LOGGED_IN_KEY',    'uk5n2v7w8a1c4nhuxkmyy9mk5y5xd2gmrpcl9ntx1n6rdqw0acwyjzk4sxk4hqy7' );
define( 'NONCE_KEY',        'fndophglt3v8yvfsvzmrlrrpectbxgdaufwectdbj9shkq9tfvmdj4wtvfj9w7wk' );
define( 'AUTH_SALT',        'oy0qcmsrgptclhrxqvca4xsxmhoxrwxmguwsml463s1mrzwh7val12fk6w59eias' );
define( 'SECURE_AUTH_SALT', 'ufq1dxlhkumc8jcbsdz7j4rxptgnkthuqr12d92fgo4gold3yflmlu2ubej1km26' );
define( 'LOGGED_IN_SALT',   'ganiumx6eoparbsaigvmk7t31igalhqnrtihrubgrztlas3rqvnuusoqgutbslwz' );
define( 'NONCE_SALT',       'sqwmaqescfprlycvyzs3xy9bednujgshpe3r2m4nyrb5t4sa1fpdkpk4cnkvlz9x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpeh_';

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
