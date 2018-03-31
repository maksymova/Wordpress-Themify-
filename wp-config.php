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
define('DB_NAME', 'once');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@ ]J!:g0BO?j}u:theM+LV>a$jf$C[@owj_.v]hh-B$-=Qp}w&>C8]CY~SanNIx8');
define('SECURE_AUTH_KEY',  '&b$#@_^I1JXzfMS/a8E h5LLRn+@/,ibX>E$)a1yb-Qh1@Yeh%tX+Qr}r*+`(9C-');
define('LOGGED_IN_KEY',    'x949M[2<#d=R(#cGSe+sRN64,ZbDgc6}u^[tuGLB{r[3r8&>KJm/f^ILqrk82PZL');
define('NONCE_KEY',        'H$-/?<LwX*9XJyZ]rV!]% 5-%&_%ox!iaR2#T_8Kg^VW, 3R<z1[EOY%#%eT@=M<');
define('AUTH_SALT',        'uI]A!nYG9(9]lvR:AgaK]1e:re74rp+^S2Z(M0!LOpaGmsRiA%5SzWy+E&z&C#O+');
define('SECURE_AUTH_SALT', 'Uj(,$cMaa#49`PNM6P}qe7JxD7BHvzxYb&(;X7g5$F_%80gn[K=kTq`ekMyunWw{');
define('LOGGED_IN_SALT',   '2nyX*OQU#B#VR![zEQ<{cvK]U|gI+>4B |tsip{rS2zh&90VAxRq/CQJW->Wxc|(');
define('NONCE_SALT',       'dOt0PfWxOZ3x%VE^]_#>&ISHv+T&T&W`N5iat{z-zM$Oq|xhj_+iTXU=^,XbG9l)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
