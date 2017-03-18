<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_therapeuticaxis_therapeuticaxis_com_au');

/** MySQL database username */
define('DB_USER', 'mydb_t1002');

/** MySQL database password */
define('DB_PASSWORD', 'FNHmfuQh');

/** MySQL hostname */
define('DB_HOST', 'mysql-6.partnerconsole.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|{NH^[D@.p9c/mo:WG[6=_S#VnKsq _A7r[^[We08*sMVCjh8S_|vvO?z5ME}8D|');
define('SECURE_AUTH_KEY',  'fb0s[M2u~G cZep/<5;)~T*.AtRdrW<1nbEc><H,E|rxM|{-Ajn0Y}Ch;i8sZ{6(');
define('LOGGED_IN_KEY',    ']gnzmb^|ufa|~Zj^r]Q;QItn1#j-WSo5+++2J+3K=_95Czl~F3XH-LzR}IRpysWC');
define('NONCE_KEY',        'xx5j,tv+H}vNYzG#ikcER-dC]R+Ka~Q583;9?s(!6,)5bqU-cV+4q*)pWUupiJQM');
define('AUTH_SALT',        '*}+Lp]7d`0:SGhf3hc`:DTC)82s:L*^-zPTMowTN-l:K8C1q:_qPBnF354r;?s>W');
define('SECURE_AUTH_SALT', 'Ge{2VV.,4h,(M$>79}n._+|7)Fe/)_XuDM2/b~zM|_u3%;qfcn4x,za41V<o@Q?w');
define('LOGGED_IN_SALT',   'eX*x. Y|L8HE~4I!5B<Kb/_7,#m{F}-|5%POs_`&;;$|mnlGGbTX.+kkw8K}bC|7');
define('NONCE_SALT',       ';MSDRw2=MfJwO fScI:Yniz]qui~d83YDB2$3u(P)83i5;t24~#TS4,4CBB7^+0?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
