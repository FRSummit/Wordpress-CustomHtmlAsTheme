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
define( 'DB_NAME', 'wordpress_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'frskynet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'frskynet' );

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
define( 'AUTH_KEY',         'T#t9K6quy?P!<1q`f%ZMXpt(YMjt@F%Wp@Na`aTkZ8<*vDA[MJ4~2?GXTz7~Hw0>' );
define( 'SECURE_AUTH_KEY',  '9,CFO)7C0he(Zx.v{|k$+ Umtv1%Ah$xO$GA|}zJy!ctDp$<#yqj][{v4$n;8YVG' );
define( 'LOGGED_IN_KEY',    '_scS42RnFTCxl7~4pn13d)7X+gU]]MRfnF&M~&WOn|<V=cCm|dg^:d=@q>i0_B8;' );
define( 'NONCE_KEY',        ']DR10<Z@gwmWY/W*;7p,Sn<NS-FEy**,a?12Ym{{h$Y;$4020VN`hLi!?yk{A`}&' );
define( 'AUTH_SALT',        'zjfk(}JE)}:*6VH#7qH&5VegG9qi a;^7Bxu=70FtVf_Ao4BnFXV>(vw9DgVj&NT' );
define( 'SECURE_AUTH_SALT', 'd,VP^M`L$*uO;j~%$8Z%U$I>E)fKu,T*83,USTwbfm)f@6?_~;eeHF3#NSkuMv~.' );
define( 'LOGGED_IN_SALT',   ':I47#{Og/{R&J^oW9BVo.~ZA7,IF:.-QG^l *Po`?tI[E1Co xbvH?&tC[^{((Dp' );
define( 'NONCE_SALT',       '7*1uG5l*Xu,o51^(2{$Y.LeqvP;2w92<0]i8ZmMfq1ZU{5a{:<I2Z/j_Hx#wQG:|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'frs_';

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
