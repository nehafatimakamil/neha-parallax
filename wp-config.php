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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DHnsJaGPwB' );

/** MySQL database username */
define( 'DB_USER', 'DHnsJaGPwB' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cxOWztPaiT' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'uEkAPfO60. DC(l2#SP1%7b~;QQ5__+1>J-{&TjXw+FN*qH%5qQR}z1~h85~%v.q' );
define( 'SECURE_AUTH_KEY',  '`ybo;L-OA-!4$hj$e)ew_Qn)?si2V:/U7/,Gx)l5extlVbn_30ff^c?XOOxu`gAv' );
define( 'LOGGED_IN_KEY',    '3d339h+:HxEh|Jv`g}?q9G{IfNfM,_EXnHBWfy0z%>@jSR8_&l}hlxJew CCxV34' );
define( 'NONCE_KEY',        'B?l+*nSV_41ipDOR:Vy2q7k5(@$.{V[/}36frZx[6hgNbt</5I)bgz~t`Jrx@/?B' );
define( 'AUTH_SALT',        '4]Ox/mRa*+Png?:UC*9Ws*kb%i]9YU(7E.fQ--CLY]<|cq;7K*DXz`I+NxwU%K-)' );
define( 'SECURE_AUTH_SALT', 'Tq4Pa!}!|,~CpeaR#$_<U1~lIWvKnh]]G%4F6B~Ej~)HnLYbDM+.cH@^5v<CM@G{' );
define( 'LOGGED_IN_SALT',   'SU#2M6%Tx0!+X{q%S]9,Po=YoJ#q94$iO[NCmaB4RA$R74&RmCK}+M!gZ1X0I|2m' );
define( 'NONCE_SALT',       'ckR6Lo]4PL>m?Y^c0HREyg(ns3pgm=|&w]uX8]%?!g6lmtb|Zp1GbNt#M8!%1XB|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'np_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
