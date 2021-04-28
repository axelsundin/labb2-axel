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
define( 'DB_NAME', 'labb2-axel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u4]X(l)6:i$@gj1j_ZC3l8x?OfUb(Oi)5a{<SExRD~Hkk,LpG,n^c%;+A5A/K;Db' );
define( 'SECURE_AUTH_KEY',  ',@R&_Sq=aTLO+=wdiQ/5:wt)u3oM6oYti#s,8x;o$mne,Bm}w>cRfY=`!LB1Cuiw' );
define( 'LOGGED_IN_KEY',    'RCC+|j0 Ln23jzu?g5v|rI$eiJR3Z,Z(O*J[Y[&.BTFt|f 8l[,x6W.{~ >WMhp=' );
define( 'NONCE_KEY',        'fERf.=a#b1s4ZDVyCnm~/W{xSd]jicCQw|dLA9d$P(w}D>O-73:D]eF?$s`YqKBv' );
define( 'AUTH_SALT',        'Kq(~[)<#H>wrt16[NOA:QG~CI, }tHJ.Z`m#=kq[sZy?)oA>Mv CGiQyglbr<5WF' );
define( 'SECURE_AUTH_SALT', '/G3ee)LiME]WT|y}e3&vF_o*WU=H<Sd29:!sdc#2>7pmuP)c9N6EQ+iNy/*yNRm@' );
define( 'LOGGED_IN_SALT',   'yz2%6jR%GsiO~.zEk&o%c7!tgXueJ]?x+(DP_Jqaa1]EBaO.%a?7d}~VPpUTY5di' );
define( 'NONCE_SALT',       '&p#{8o5L2I?)-7x;;&YlgKRjJ{GVvo&jw4d(eN>M0OGRlv~Ar:@qP[R9W8!x^qop' );

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
