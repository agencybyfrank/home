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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_33629632_w587' );

/** Database username */
define( 'DB_USER', '33629632_2' );

/** Database password */
define( 'DB_PASSWORD', '7pS-]G0Y1x' );

/** Database hostname */
define( 'DB_HOST', 'sql112.byetcluster.com' );

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
define( 'AUTH_KEY',         'gfyynsus8d1xcldfvqjvyuhl5wxjhi2ajx2pik6l2wnxzthrulna1cl0jwd0r0up' );
define( 'SECURE_AUTH_KEY',  'w0bbpv8hp8a6chizdhrbdhqn0mosqdoddxfb3qwys5rvmq8gdl9vkfcqjrlzcpze' );
define( 'LOGGED_IN_KEY',    'oypnwunbxermfvpcyc3qucshrnrqzgxicu1zssztukovrkqlzngxpik1qlgcxdmz' );
define( 'NONCE_KEY',        'h6ixq7y1vt1ldqadl2xebfhaag0xxepql7if4diuiocz6kxjmg7kfilugsifcyuw' );
define( 'AUTH_SALT',        'vvqtxjn9pjgt7sq16pvgqrds9cqrck0lpfpxaqrw8qakioanujfjdvteo20v56bq' );
define( 'SECURE_AUTH_SALT', 'gelttzdouagve4mqvdoio1pgrncnoyjnrna1mndwggxkff1idvepmumuwrvmebdp' );
define( 'LOGGED_IN_SALT',   '6flztmumofqlnl2xphlri0gp1ntv7oi5wsvnp619ipjoreczieehsogmijmr8cae' );
define( 'NONCE_SALT',       'cvfunjcdblbel6y2fedbqhlbdfmgep9yqlyyfcjlwhn72y8aw2aok6h2pf4mryks' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxb_';

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
