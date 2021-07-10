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
define( 'DB_NAME', 'wordpress_first' );

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
define( 'AUTH_KEY',         'Z$%a,!p mx(~-U*>(f?9Bt`&~MLHb<jaEm>(9[{}HE5[no+|/$+Dy7Q,(}[3/R2d' );
define( 'SECURE_AUTH_KEY',  'u:6GjCu,D_y%oQ2g-]yEU(36mEV=k:66d)2c5#em22qy_*lW~CxQ,C^d|JFHoP`8' );
define( 'LOGGED_IN_KEY',    ',9k?2{mnBS*-UtVt#|cQ}A71rU:HoJYZ(AQ$)z(n`$R*R^x5wKkeL:D?iUgNWxY(' );
define( 'NONCE_KEY',        'qk&JLsIaS6Ao;sxZ&=Ps3xT@A5Cc)-3p~ayIA4_hbeEsJ QDL5,U2#5>Bp6<xc{u' );
define( 'AUTH_SALT',        'TdH@lk]#S9B}~xEbLQYj+pDY& -SOOphqR{jKn(?3,bw1i01<j[3{P*)p-t57#$W' );
define( 'SECURE_AUTH_SALT', '9U6ZI<ec;*CcPE1eT1C:*l[GX#~VAzdMn5zcCG0)n!rY*<ts1l%:#TVTy.P[!wU@' );
define( 'LOGGED_IN_SALT',   'KrgRBj%T}~@I58C`PM)@m9k(hL]njbhwx SN1V*<dCk2<2u0r.Y0#J[S`~ni_wiQ' );
define( 'NONCE_SALT',       '>G<MVic@QOZA.lUC wdWA[;y/DdI6>Z~[@H0]O[j:|=ctBaTPhZEXQS$D]yqvT.Q' );

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

define('FS_METHOD','direct');



