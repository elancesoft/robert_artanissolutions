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
define( 'DB_NAME', 'elancefoxvn_artanis' );

/** MySQL database username */
define( 'DB_USER', 'elancefoxvn_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0bLCiiiiBh' );

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
define( 'AUTH_KEY',         'd_[poyF4[|Kjb2Jc #s^4`&2YjInAAL$W-gdb8t5jOKkyu`k.9#N_-A9;7`Q?YOK' );
define( 'SECURE_AUTH_KEY',  'xUFk8q>*.2x]3{3;N`79|wX&]6KwMnWvqwrPCQn_$-.w3^YVQ1n[qNxp_0Ul>wAd' );
define( 'LOGGED_IN_KEY',    'qOL>5HHR<Ld2C _4l&mC3>QVoQ4H[];a`rPK*{np*EZ%p:@1M:?:,eh hW_H7h=V' );
define( 'NONCE_KEY',        'KR(=:m|^.iL~M}>[xZ{g)cSo YLiT|t@sJZ~kmLK uew6fp#V/Jun.J,{kt%U89/' );
define( 'AUTH_SALT',        '}+bs{DbHNsTU .-A69%y3ycyG-5!d{aj.}8ynD0lHxPt~Wb+k&zpMrkFwIn?R-?X' );
define( 'SECURE_AUTH_SALT', '{pYnVRXhAaFK>TmG5MMSY~_NzDWDOKONvOiaj+|GIQ B{s_`!i^^Qn>>MAfN:q1c' );
define( 'LOGGED_IN_SALT',   'HRXlNl,OaxznIvm2)8:3Mj6fpzNs|pOZ,wb +g@DXI4r)d6-)[DtR`?Z{ILo-zp ' );
define( 'NONCE_SALT',       'l8D9,m%,NR5,~-Sv`//B4h!,3Xu3mGzwJh/(wVfp%9Ru2AJ3&r-W(a>5tlyzSzl-' );

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
