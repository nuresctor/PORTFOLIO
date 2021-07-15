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
define( 'DB_NAME', 'wordpress' );

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

/** NURI */
define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';USC(In)F#R76CAx`~x:T&+SyUB@H)^Tl-9y|(}7}tk%Jln:/60U3cM.J_:X*al/' );
define( 'SECURE_AUTH_KEY',  'O 7/G;T-wTL=U+uS<%|[9,%TiAT2a8$gnVLDmKr>ZF@ f<~qw+)(`xj8rm4gvCy;' );
define( 'LOGGED_IN_KEY',    '%fy?4KuKL`M&aJs.Z^axR*m=93}7,nglBHK&*j#+l;~8A/Rw.@N6%Vk@-#njd{pN' );
define( 'NONCE_KEY',        's$t9IUX`6AlFxubJPsosVdQN]|RdPi3U_;xQDq&^k:)WxwMnw[{0+<1>E>s0&*lm' );
define( 'AUTH_SALT',        'vO(v7`4=@?bEQQ!N*wP sCD:|XNBzi?<ri-f4x^CCTxZol81f;yHn17e5_rlZ=]Z' );
define( 'SECURE_AUTH_SALT', 'Du!Ik0_#<{NnnPhNDLZ^S5TsMN,~T=BsN`K ioq &law`~|)|CZo VE_o[6S`i}B' );
define( 'LOGGED_IN_SALT',   'QJ7L!s3qlr/_R ClQAZS45.t[cMS;X2D?dc+#oXyvrp:S a`O*=1zg{.##N|0(5k' );
define( 'NONCE_SALT',       'hk=RgM^.s*LFozh,>UCm?bnt, ZEZh9xw(:f|&QjVYFo w/XT7YqJ`eGL!DvFjwe' );

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
