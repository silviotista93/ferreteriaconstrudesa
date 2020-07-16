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
define( 'DB_NAME', 'ferreteriaconstrudesashop' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HbK3CJVIhe83urtDQ7x2' );

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
define( 'AUTH_KEY',         'cU2HF2#C22v`uEiO+:.t-ED2xn=g GgIX]i{^q_A/{ &%{=3$v`LG8zbms(&iZ=]' );
define( 'SECURE_AUTH_KEY',  'vXm%A2hN{A12^TVhIQ!VQJ<7|A;lmCZd_N_|2FZ1%.0obOOz1r07n!ZS4CnC(Y$j' );
define( 'LOGGED_IN_KEY',    'TH_TyJ^:y76)I8kL?EJ7 &vEtuQ*|RL~@Io4z4n*bk9PemY$tAhk*G%<8pFaw3F1' );
define( 'NONCE_KEY',        'URJZ($2&r-vy-o 4~,1AjA <q$uM@5A/k$G9a9C~4Yx}C<%a#^}[(/&&`AKXN`0a' );
define( 'AUTH_SALT',        '|dx1.=&O%Az0RCqxZ; =^+xewBrl<Ji!Oq2_s9]Mz-{>`L(G47&J 15+5~WX3*H)' );
define( 'SECURE_AUTH_SALT', '`2aX]uj6~iB/m$X cCSr-hufP)Sz2a?+=`3V-DRZk;aj1=<q787zeh>#<a32IdNM' );
define( 'LOGGED_IN_SALT',   't<wV[^,<dD)s&BY#4/z`Y)GUZHR3q1g04_(EB:#_&loE2X@nCb.1#@Zg:Dd88@,k' );
define( 'NONCE_SALT',       '_/cjZwlg(TDsj,=e_ sW-flgKe;~v<><%OG{sx;wg~j645r=y]HfY4fzgy5.47?R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sm_';

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
