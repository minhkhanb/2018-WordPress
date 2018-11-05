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
define('DB_NAME', 'db_portal');

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
define('AUTH_KEY',         '3[Z&c[*uOPOHY9W<xcAd?,J/`=!9yEa[=v5pc4??.mi|Nl~KZPpqTW_-WmRe!e$(');
define('SECURE_AUTH_KEY',  '#wo3leV6/HFFg)yv4c/6l:pdD#{b/#Crp1N)yX$5{q#FT*#KAK7-9KId0KuYN`$~');
define('LOGGED_IN_KEY',    '7TBwWT1pG1fsYb)8@SDtxt}NN*q6~cJ?;PmA*5eVRKBoCcMc>dLQ DjNns}jFA|d');
define('NONCE_KEY',        'Bz2<dXJ&ryigdp%Q9t)YSZe:d;~gw9IMp)a-am]s^My70MaS5e-<S[BXU^/Xcf*1');
define('AUTH_SALT',        'p6#9M[[1i0q|:DgC*V8p F#h!lmL0#p5/9-d+[eM_GZ~n*:WoG4-}ajyD4Lj[sv<');
define('SECURE_AUTH_SALT', 'lsFz}0m4`)p{p3_W;?t!Xv=B=T4?tq?p@#H>p]u~JU}i828jMW%Xq*v^[=W.)zPh');
define('LOGGED_IN_SALT',   'c$yhqI|$ySn*a]66fekC1nWjd;rK~6]:mR5C.Oj,Pz6q XH8 fC/2Kbf7ws=7_.q');
define('NONCE_SALT',       't4KWNt%N}y0r!+Wb.EhOTE&-:]9N9$M),)Ftn+8zFK}Ex(NeVJ(MrqnoR6XhjF2A');

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
