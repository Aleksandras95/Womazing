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
define( 'DB_NAME', 'womazing-wp' );

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
define( 'AUTH_KEY',         'wdee8XxN_RY0$&pu$Bai+rnlOpYCY$+Vn v0|5#!2cxHXr=(<_`+N*I5W+Ht0C?`' );
define( 'SECURE_AUTH_KEY',  'da3)U:qj#[%{DX),p_R,[FA|h_I:@=o+iP)>)41v1a@2Z!_mH/wfPy(rzVW!^hl;' );
define( 'LOGGED_IN_KEY',    '%cP2O*IWPg)_*{&*1w,lgX(:y~G,`9w#P:vPUr[[95I7M%VX_ujS8D}SQ!L->Gbc' );
define( 'NONCE_KEY',        'A8|P(u(FZBvsKB5>0y7{1#XfDzs/NR8vZxVStS}^i]/`@;~o0htPZMfi8<_[34j/' );
define( 'AUTH_SALT',        '>WMN]}yc,8~#X+0.HicUm(wSP<(ZeM*^J,j)dsDkWdTrN(yC:X^dbV:{ya}tb5!e' );
define( 'SECURE_AUTH_SALT', '}Xn7Relj0)`I~VAr{+=.T|pf>l8zr$>i_Y$-E@5BKz3sO~Y.b8TGGBjrBN%}R.bu' );
define( 'LOGGED_IN_SALT',   'D>zb]|[,-^9}@y&%C]68^>!~IXIgIUU(7qD+1R}~Xv*i`ZZY|+c(?%,/4|vL*^YC' );
define( 'NONCE_SALT',       'J},/`q.S?LeN-rFd`h+Nia}pS8?gPcBNfj03BEJ1a6i.DU,~5$ijii5bgYa[QcYV' );

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
