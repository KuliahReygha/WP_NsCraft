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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_nscraft' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'axTu#Zf1MmLBR/dZ#.{6xV8OY88kZ-t[EhNS~50||xn47j.Dk(-|;bK#$yv1.:P,' );
define( 'SECURE_AUTH_KEY',  '/m*brzj},jcrs:(O*$|wZ!(Rs2`@54p`s%R#1FJ]omus%p$NzbTadFU5S2sb8.hb' );
define( 'LOGGED_IN_KEY',    '?vZAL$$@s,W{@2wB`9.y`%!On*%{2Zpu[XZOBh6/`|<^yB}VGiS6hov=/igL./q;' );
define( 'NONCE_KEY',        'UBUTA|d~Dq`69~q]f0#r`b.Om.Dc3>6c~_B4sL],^<-H(/I: FfR(}geGVd81jL(' );
define( 'AUTH_SALT',        '9M3wRVS7_nv$HxtC% ^[2 #Hh2pIgi63~g1[tiYYAj#:,6Vl1q2pFUr[s$1]Y`+/' );
define( 'SECURE_AUTH_SALT', 'V%!.l0p9I~7c7vQjexEiP<J`G#SNSiY(dQj!hL0-pn:JQPo*!+zMrB&kzR$3Q@qB' );
define( 'LOGGED_IN_SALT',   '#gf(E)l`F/(Vo@(#Kb9[@5fFOJdOz^^@*cYc9T)p{<@`5|5^0x]ABtD=!J~p2o4S' );
define( 'NONCE_SALT',       ']L*5Q8qT:1*I&_{6(Dgw)]>4@GtzaMg2>Ibg^.E7|c{+ITT9#|;g$_ %qtW0m:3Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
