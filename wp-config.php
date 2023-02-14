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
define( 'DB_NAME', 'portfolio_1' );

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
define( 'AUTH_KEY',         'Qq<t$Oo8idv@EW?ivJ>:O{qw}fw*^mRVJT?hfCmF}7=+uDlRtUo9=1b?a-8J(~Lt' );
define( 'SECURE_AUTH_KEY',  'MC%4?Clto*^-N02V0J0kJu5@d/ctV_8#((91d{Fx<:B0AHlpJOqA$z A~vnZ`X]K' );
define( 'LOGGED_IN_KEY',    'pyX]f+Lp>$T<a9K9yHOON$bFM)vpuGwtgDZAv1kPSb<u8]z*X#_@6z=`</cUlod]' );
define( 'NONCE_KEY',        ')}_[Jr@@Fwl9 ZDu5JCKgW[$Lv<Z%rdd:]]}L0lwaSPc}ymvA;]jL!_M ;)kjQdu' );
define( 'AUTH_SALT',        '?K&{|aM06&hH?r9v;1-K@#~M9KYT<F6qS4sx80Wr1y1T7^]F&{eX [_bSNBW+>Ca' );
define( 'SECURE_AUTH_SALT', 'R-9`j#2W1F,*sQ[`]_j5fO0i9k1n6P&K{4dp;WA/ )KtbZn]6E6[^SetU<E5nQh0' );
define( 'LOGGED_IN_SALT',   'T5+e`@]/Iy7|wd@e&1k7^l[uQ@_XS+dr3zwt~QD&>fm`)$:FGyRYOG%6gQ(}M tq' );
define( 'NONCE_SALT',       '9!(q`D`%t6QRQ.#dM[jPnAg7~WoraJg>l0tiV:O$CB*R2A[BzzHHm}!}3HN~.MR?' );

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
