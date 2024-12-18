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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhosT' );

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
define( 'AUTH_KEY',         'v}abWD{4_Zm;[J`(H)vW>mgP+lR=N[1]*CA~:5&ERiYMbM3jF&vyZS%4eHkPr%zq' );
define( 'SECURE_AUTH_KEY',  'yRm? r:iCQCri#zJ(r;}/z!>C,@#=y$C59Vj>i `4_W`5@~U A.#GPQ@Ty]2iseT' );
define( 'LOGGED_IN_KEY',    ',cmoZ5eth>!9S3^tJ`EYuHak=eydi6%myzGPlv<}{x~YbI8M0P-?)lelkTyT7wlS' );
define( 'NONCE_KEY',        '5Oxf7cb=noCeB9a^eb^rc1T)<LU(&MOJ>a-02 B5(Jm$nnNu^4&0=1%sc$su{!HL' );
define( 'AUTH_SALT',        '!-B~0^/KV8Sh;@IGGe%deL9-|m<(&GcovwA~Zp{fTHv5`_Yz*7)%2Y98f+&b+<*9' );
define( 'SECURE_AUTH_SALT', 'd}WGGe}&+>!UH.qcw?x-&)hi15}8UP~*f2JAQGm5E32tHM$jCP/=Djpl`8P2>[Z,' );
define( 'LOGGED_IN_SALT',   'm%*AJHQfGf7q9L<#oU,:7%;vWo@>8(!NlQVGEQ~Cx:{EQzz]<$d]%F(pZS2%(fdI' );
define( 'NONCE_SALT',       ',k--2d&LzO}QZc;UZlDq^p8;F`>W<zFqe*TJsU,ksQv3)uk7f*2QnUpth|dh=B}L' );

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
