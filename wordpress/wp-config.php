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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '?kWNLVx.h5pQsc/iXRp-[Ux xK2`%w:p1ylfKNfQ:-J}O9E|<#ODP[,{N2bI1|BJ' );
define( 'SECURE_AUTH_KEY',  'ek@LQ;dw%Wv%!r7|@0-*G=Zei(W<n}[TR>ISsiN/c!WxGFmaw1o% AcVe0|X`~}!' );
define( 'LOGGED_IN_KEY',    'IN-BY1xCmJ YRy_^_ym_E+=B2$Oh7M5###P/VT,@G_}.[*F6~(}!^~G!b8`h<lu!' );
define( 'NONCE_KEY',        'WQGsfS~;o8->kK=v!7)Q2Saoh4%#z_b/S:yk!Q@QiFK]YSz$@X-Vh^S-Q=S$UbM?' );
define( 'AUTH_SALT',        '#m[C`8I-oOkTwN,toaG(+{mnTa1<CX*+F~X&9nN=lhfcnO}{hm1{6Hco<]V[mK)z' );
define( 'SECURE_AUTH_SALT', '*Kh-olrKO$w ~j eQrZ$;UO8$TTS^FN/f3HCe1(^p[Zx>m$ah$]iom|,s(g3&Pp>' );
define( 'LOGGED_IN_SALT',   'K$s&HUHNFI&d`N1n5e|cefG``v<__-wmpGj,.k8h/u#*}8MVQS.z?dm3VRE>~N,i' );
define( 'NONCE_SALT',       '+BRrat~$L){y`G<=eNFiZ9D_&;QPQ%#j.7B|T:bBH|M*r(*?CAgF$vi,m>tB{$+2' );

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
