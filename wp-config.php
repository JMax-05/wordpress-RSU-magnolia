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
define( 'DB_NAME', 'db_portal' );

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
define( 'AUTH_KEY',         'y2_D.e)-R#uL.53^EA}Q*a44KRiyz2}MC(#L5sY*(Q8}0f9nh|^1x2U}Isk]Dy_s' );
define( 'SECURE_AUTH_KEY',  '1Bu3]t:8yr5Q[D<)AK/|NxxsI*Lft}&^7^.=e78(Jk4_3.>NKsMEJ`e&,3,jl=g6' );
define( 'LOGGED_IN_KEY',    '^<;Zgbk~OIG@|AAOfYjpnBR!>1@j$1([ xp82A<Qf%y(e6j58.DHl`4UFi<WPlx?' );
define( 'NONCE_KEY',        '[F@}.8C$W:OH-r7x2=EyYcTBQ(mW%&iv$^4 vpSRI zp~qVu %ljQP4^Qtr.?~97' );
define( 'AUTH_SALT',        'mW}dGo4zD|fNAfv988b15VMFvBvQFW3!`x8Tvl:NF_0l<tzaMUAGJ}%4+0T1})Cy' );
define( 'SECURE_AUTH_SALT', 'JMGelLJV?;3!LZeOeK(Ew=CAf[UKU*__m*1XK8>]xsLB*:hnn38 Lp0]feolV>4:' );
define( 'LOGGED_IN_SALT',   'sTJOfZ9^]>@fd;;oigxs X7:z#O ~S<r7)2VtA<.JE%iABmpR2v(Q<&6_I-Q+#b]' );
define( 'NONCE_SALT',       '#}oXd4JR3[,P)fQol+[X/r8gt3 !7_t,4-HrmJ5-EaFNj&3QBL2KnriG];FAu]D~' );

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
