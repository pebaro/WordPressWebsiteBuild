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
define( 'DB_NAME', 'pebaro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BirbkeMjAQSMs=CNkzK9Sj/*EFY~d, @#XEalJW7(Cf+c>AMVd7s|AE]B1Qm_i)c' );
define( 'SECURE_AUTH_KEY',  'K zi,u8M?|<>/1jyk^Ev[BE|KtkW@7u*)blpN={~/mxK3%kt+)ml}rNT^#mnR4Xu' );
define( 'LOGGED_IN_KEY',    '$^,S;1_;,FPc~<q0nJxCo~/#no%oyO<[UkE;NQ pMv97t#=Hm%DtwfickYH&4-$-' );
define( 'NONCE_KEY',        'vi|^hY5#m!7e<o=Id`]gh}VYDzO^56XxxM}*$h <WgWi]|tO]- C7b;|RQ_.tFHt' );
define( 'AUTH_SALT',        'JlHNsqOSP*<@mqfxBDJ@nTW?b$I|oq5C;_RLUA<DcMfy5}QW]Hs92`WLD]qEy{c5' );
define( 'SECURE_AUTH_SALT', 'uJA]68ls@7=.aN` ~8#~`V&,h!X0OllUMDttOp&slIk+(e4_J%PSZKTBw*W+W0]$' );
define( 'LOGGED_IN_SALT',   'L]I/y4xyU J[d^~Nv(a-/Wr9QVo]0!k]/~yN]*I1ZDh}e%y eN`hf^zR3S)Uy@ x' );
define( 'NONCE_SALT',       'ZLDKNg}Yc{9O>W: x^cgx)I`Zhb0- ~BqAMhbPi=+7b/rt4_x|U-9]=R6,.TZ`c_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pbr_';

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
