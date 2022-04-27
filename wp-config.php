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
define( 'DB_NAME', 'resume' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'ICCeDtb&^au;CW^Rey9CAWeny)%[q6|!rElki7U<#qksPKtxO_KeJvbboWQ,lAw*' );
define( 'SECURE_AUTH_KEY',  'C#wQ2LA6*7b_P}7]sypJsAQx9)[` bsySa7WJNIuoVlIc[Q`n@+n|tt9aw%vi57K' );
define( 'LOGGED_IN_KEY',    'h|nj:7J;*R]?$lH2+eMm}w`lmLHU4R>QK1_#~S<c:Lj@zKv,ho Ime |9ly84|Y$' );
define( 'NONCE_KEY',        'I%7_J_Sb.uSkT] sz=7(,!*{S+z^G)h|n?x0N8%kbCX1]E19PkQ2F,9NYa=-bb7;' );
define( 'AUTH_SALT',        'Q1i0wEq-(/iH,;+@G|l8$~,=N lku207lg,l,Zqk^fFLw{.6&=V{r6l{Z3&nI .h' );
define( 'SECURE_AUTH_SALT', 'L+V[a!NRNcRh eDVT#M/aZ*e/lQ?)c$$=.:]PF!OI%GKXSh,7^mMI&vk^W{cS%c-' );
define( 'LOGGED_IN_SALT',   'iCRei_TOaQ!xM fs}X?V]>.f!v7p_m.Ay5-+q|Q29b7lr**uw?-9^u%F,DCn}71_' );
define( 'NONCE_SALT',       'W%<;wP^+;EU-Q!W5{J.2*$,=CC>%`x@QVE*CFNx}?O3(0&k,~]rS!-4(Wd}0-Nn=' );

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
