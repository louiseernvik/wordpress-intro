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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-intro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'N}AH<KWo AHp*^ei(spX5je=)S;aemyBnoQHnzZalUsB4S8%_KpQ#X)sU;Vj<2wf' );
define( 'SECURE_AUTH_KEY',  'Nh}`9!4K<u)HII{QO+:_;`YNn2e2LJ.2!-[T.Ks&W_~N[7W$GGv/XV2J&=/=J:|&' );
define( 'LOGGED_IN_KEY',    '6e_+IsD<$/pUe$0:LMbSTqWh0_I8:;h LW~XN%e<:LGb]_76JjC/H?4+MKz^Eq2-' );
define( 'NONCE_KEY',        '|Kc(cSbRC~!4s[+lrzPptq-W?wLZ~]R(JprGxD-]#|HU==DrJg<a8kt+V?`STH^#' );
define( 'AUTH_SALT',        '/En3rF>bKzOOcpeCcdt:&&$mmKpmUX&50,mBSlT+dR1qO}J_4W=wP< qlAqI_?A+' );
define( 'SECURE_AUTH_SALT', 'HV+HqQkYi-} ({zwIE`fqRe?rph&VG+XGEVkm8Tqv;|t(E`ue]KNRO279F_c5#DP' );
define( 'LOGGED_IN_SALT',   'T -?JcSpE8zkoo/8(Va%{=I:W9qd}_M4?S,lckEOSs)?bkXqGJ&&t[H]:%@o<8cP' );
define( 'NONCE_SALT',       '_TjIrRmz ~gqdI6v--)-~p|Ul?+3cvk3<)G^0ZKuT.% duOC}w!t+:2T6Hpav|,y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
