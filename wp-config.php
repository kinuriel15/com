<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Anime' );

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
define( 'AUTH_KEY',         'ubDWuO80KNQ&{y[q va0a&:4Y!paMNG?]!}i2pgCP!@(+Ig**@`@a6UOebpG6>a4' );
define( 'SECURE_AUTH_KEY',  'E7fF<!hzn+:wNaAGRcK]=4rQ){hv7#(pDc8o4qZx{]0phvK*Z3l:~e>qJJ*y)v#X' );
define( 'LOGGED_IN_KEY',    'Y?N)+hY:>!}M/bD0x]l jl8ki}s!Z_$).<j/y-z[%Q`*=cu,ZS#&@sd+@(5q,Xh%' );
define( 'NONCE_KEY',        'UOmpIfoLrf_c)5-fI[pB1m2[J(l-.{9TwOzJ/()G&^: 49cR>[>4>9qNGg2$-=lp' );
define( 'AUTH_SALT',        'ge$BtFgVt55O^)>%DkL1<%j_,M lCU^}o&b-zv527A`fHf&L1rl`mZ;/7Ac!&o<P' );
define( 'SECURE_AUTH_SALT', 'bh^6NdS)vc`XW0C?HOFlE..>bbrA4|!0y:xUcx6A1ygi*oCf<(3Abjm}Ys26,)&y' );
define( 'LOGGED_IN_SALT',   '?uAZjl#!HvhR*Wie;]83Q8a:gg1dZJn|@XHN#x.TKDQqYNbu0Iu3,M8OPn?ntcZY' );
define( 'NONCE_SALT',       ' jZD>g*<wO}?!6/Lvk$@-kdnS6bCP,)#]`9c5_<hF!&7%BKma6pB[W>Yy~#hX`5c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
