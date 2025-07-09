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
define( 'DB_NAME', 'brightdaysoverseastvm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'ysa262e}oqFi57iS0npd75$9S75m-wj_rT|}4AOwav:Euw]+g2UGtcL@_wWL]X>K' );
define( 'SECURE_AUTH_KEY',  ')lTIQ<hQ[z{Yyx+]TR@plV &BcV]LUxk~sssMO4{rB7pBWTU(H~)M(yd(a]WA8rJ' );
define( 'LOGGED_IN_KEY',    'G0-b<LUT3A{es02]w9Ugqq9c$:%na>/BZ?Lc^Qv6Q>ZTObaXqM9~&(g^&2&TQu|v' );
define( 'NONCE_KEY',        '-GDgO;326> 4eI8!N#Ax}}_|a-EKXHwV#?W&6m077kFe3 E/?wKsY Iv&%;<24q)' );
define( 'AUTH_SALT',        '~Z=^Z_u>r]@u``]A[ex&n9^n,E0T^w0cvhyIjxgu{P3HWVOf*{=5K+x%Z%e6[?r-' );
define( 'SECURE_AUTH_SALT', 'Q6qWX*g{=P_q0o8AvY:lvuguu6U{lCHI.-8:kzNco@w/;)LKux|+6#[3*$7Ro&I{' );
define( 'LOGGED_IN_SALT',   'xn4`VS^B{[j40;[#6x:l-;!CE19)x85K|+Km&DA~)f1,/ljJ^=s(KEq_^1+zbF^9' );
define( 'NONCE_SALT',       'J=8a:8incS1a3KV[*de]>:6U5}oH2AZLL~PfWV92/yq$}BPyf9/=1$f2Ty)s^oxI' );

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
