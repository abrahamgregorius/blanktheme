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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blanktheme' );

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
define( 'AUTH_KEY',         '}HjWr2n2,^7KCa6-`v@/RHc8x&t5mW8QQ}Ov,!r`rhFtVKg}k08YW%gWHY^|pqdq' );
define( 'SECURE_AUTH_KEY',  '.6#FG )e r9Wa%PSBp1Qp{/4~VNe|!2YiW4Ej?`AJpVD!L9ARs1-#DZ[(RCZo~=/' );
define( 'LOGGED_IN_KEY',    's4 ou$E-!2g?5QfV/rz38kG/tkt`5F77_WPK]ON]o~JI?J+#$4A5Q}[EQ^V(LAq7' );
define( 'NONCE_KEY',        '.q+eo>_8JtQjVm_h-Vywb4JC/6@J}blh+)Lx17h-`Dr|xKekRSEi#0vY!,@p62I>' );
define( 'AUTH_SALT',        'UT<1>6WVR[L=hLhvykj 8FvDT,RU#dHh(;@p,--])au%m(k<LzN||i{%L=*:X.8.' );
define( 'SECURE_AUTH_SALT', 'gThqbe$fM]4j5AORharK*[K2AF63S}[ueO  t GaXhmfQ%HlZMuNLMaRSY*j=u_4' );
define( 'LOGGED_IN_SALT',   '~s*~2bMW*ILv$(Jpx8Cp=!kuc?4ZXCQ TD;N8:7yO7:$&Z~,-W^h{cG3-(2:lwc(' );
define( 'NONCE_SALT',       'A3c/T|^e49%sRdAaDw$II Ak@#MltmA{.V@Vu9p$l!]^O_b0@L)qnjcmj]nKTZIN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
