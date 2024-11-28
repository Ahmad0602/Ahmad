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
define( 'DB_NAME', 'ahmad_ramdani_wp' );

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
define( 'AUTH_KEY',         'c{.M7gGY|5UCg?.kl&GK YcQ5f*UUg%DgDWO)&Xz85HCM8 LO{<$<avGbVf5g4m!' );
define( 'SECURE_AUTH_KEY',  'Ca`S84Vq/C@) +Q`hejisPmr=z6f|+(Nk-5bb!M0s7;->3DfI<Fb+0#&6sG[H9vo' );
define( 'LOGGED_IN_KEY',    'Gc$;@fK8my^K|eSLeft%Ap4nD3Hh/~sU]Ga8WK_X}<7?9rvXP^_ua%k5Y+}&(p&z' );
define( 'NONCE_KEY',        '-}gvW9a~fZf&>0F0($k(i{k`xE*6V%=xH8sT.w}[LGf4Q$$:M;GoS`,UR^hxqkWu' );
define( 'AUTH_SALT',        'n><F[`(qjX(o!ojf?&W.`@.=gx%#`RC^7}*|E$9?xh50jv-hVnPtr3se6NBqW+&@' );
define( 'SECURE_AUTH_SALT', '2zx(F28kKf>okWa&Tw)AI:/&iGU^gVKs=>&89(j9FZ,1<0$yKso1B Ck=ji!>s|#' );
define( 'LOGGED_IN_SALT',   'ShW]B}(V_oJ2U G]WJ+P/&5m-`uL.DslH&4pamc.KDHD)^nCwiHJsNkKdk^jh`{f' );
define( 'NONCE_SALT',       '+Jq;yogD()`2-ABlBsq+L#q$.YI[?(&2<:ak}9c!$nb|r`Ord!I0!]8(K{=!3%~u' );

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
