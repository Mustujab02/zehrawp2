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
define( 'DB_NAME', 'zehrawp2' );

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
define( 'AUTH_KEY',         'V?2_,;d%PuO]R:Z}jt)mk]F)aE%;@EYMNfx-#T7!sx^;`MnNS}g {-rRsn&p@U:,' );
define( 'SECURE_AUTH_KEY',  '[D@~pmG9+itzDb?*_W$aclLMF}n-Y]_{?]j)sF# Vaj!)_9ls]@C6q?-Klr4PimD' );
define( 'LOGGED_IN_KEY',    'c/:SHZK492pLigUQFT-=X_T:q)WCJF4Tr)eR;x-nT![(708{i=BrQ?u7d&OB/kxk' );
define( 'NONCE_KEY',        '4YV)d>e,sqC{ZYFQWt<xta:%IqW;H}TfI0,FH{$]+>qT:^u-QpoS- Ee=b}VB #x' );
define( 'AUTH_SALT',        '7;X&-gEf_%nTiE6pZow)1yL?=T.6_RR|7/lvS`Rbd$W;(=.]% hf8Pxv(j&n&j)q' );
define( 'SECURE_AUTH_SALT', 'O$K%Oh%{Fb[nCfBu/L=ST&%7U]5yvP<sNJ7m9Vzc;7DQ4!C_n@PC~yeuBJQ[atmc' );
define( 'LOGGED_IN_SALT',   '8Yx(8ZDt2F{Q4p:{Ts8ZI[^~uN-l 6Q8vl[sSU/jy>_jJf-]cXn2[5A3U9NdSR/]' );
define( 'NONCE_SALT',       '=RU}3 ;!CL&)-dAB}M+9sT_NcMHO#/&A!L*`>-n>TvX jA&Bb3#(l0O!j2&yar+]' );

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
