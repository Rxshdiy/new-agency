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
define( 'DB_NAME', 'my-agency_db' );

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
define( 'AUTH_KEY',         'p3=d,i<8jXvyAMo}y57=36?er.Hv@_+-Toc>@F/ZKzAS6Z)?|r2qqjn%>00A%ueI' );
define( 'SECURE_AUTH_KEY',  'dyGghqP|[n9xud/E~Fq4DNzw[fPSW%q|7`uxe.Lx>mS)F++dsz;r4H4WGf-x6-<?' );
define( 'LOGGED_IN_KEY',    ' Z`4:H5Ray8{zI63XIKv$,--^Zl>|R$FI8z~_LY&HET8uM)VFbVJJRob`gkh#=u-' );
define( 'NONCE_KEY',        '_l]97jEeAXUy~Dd1!^$]hr=Mu6YC!20*zAu0/m<0YDO,viq%1kxOwo.~XR?OM#k>' );
define( 'AUTH_SALT',        'tL.3y[~BvivWdf iAEM?Nd/E?&?)3sL7^db7jZ`aW_=C(;5-9>:/0#G7)=^`QU!{' );
define( 'SECURE_AUTH_SALT', 'NEjMyW>f!K}_Cv<[uu2gUg5NfZhRP%AZRo#NBDa]I.ST]:5&xr(NZjq]ZOeG:%LY' );
define( 'LOGGED_IN_SALT',   'CW#Oac*$g~!:i8+uu57={ycYx]5)HnS7]@AFoa]Zo@~5J1hy*21FoMHc4~&i%IkC' );
define( 'NONCE_SALT',       '7p%e_AFo.H^LC.7-ptz^y{XoGza&;2&/}.REZN78Z[WsE2 1U398dFs}Q2+7{V6u' );

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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
