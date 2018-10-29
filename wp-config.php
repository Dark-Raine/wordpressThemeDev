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
define('DB_NAME', 'wordpressdev');

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
define('AUTH_KEY',         '_A!*|>:1C&n6Xyg,+M$z+iJ Yzc!z8,.<hGrdVq$z==A_wdv(dqK?jW6^)x$x`b|');
define('SECURE_AUTH_KEY',  '&isz/U%30%1[aX,,Q[G~TpQQ@GB>W817*Bnf[62G$znKqf$Au q$rfd7yx(>A*]f');
define('LOGGED_IN_KEY',    'w5vO_JD2}G`^2H|s%q*V_x]cFzYv7FLG-Z7f:FqE?VM|:j#VYFp2#LC-Qpo8clrl');
define('NONCE_KEY',        'x6*=ZZf)jHo<TWaatP776#9-D0e|=_mmC2P.{9O.|)gZDc3W5X+FNf(S1B0K=@xV');
define('AUTH_SALT',        'Q2]]7C]u!Cm8)Gvu&+`OG9yKTr&_; <X-gO8yMQ<pj3s36*koe:15$TpG-6{-Tky');
define('SECURE_AUTH_SALT', 'TgReg&%qYp798-1f!`qNgu,K@8L1_G$RlO-n?u#<3KPv?rf*&1+BC;k%,FHOTA_y');
define('LOGGED_IN_SALT',   'ath5}Z@+Jk}5i5.0!@Nd}=JfeP}(:$6>1-r b7(NU[arn(?j<%0eLtj8Q36m1D9G');
define('NONCE_SALT',       'HQfQV1ec_FkcPzd^dG` WU_K=|bqdD?>liV([9QUNuCdGnROy_&11v@H};<~=A-C');

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
