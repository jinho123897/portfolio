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
define('DB_NAME', 'jjh1994');

/** MySQL database username */
define('DB_USER', 'jjh1994');

/** MySQL database password */
define('DB_PASSWORD', 'jinho1994');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'J^$dN4~_ rxEnO|o u5Ssbf,~C;[Z=Vx|tR}dq!/O/GQC8]K|&6p3_HSYci[)jGu');
define('SECURE_AUTH_KEY',  '0bZC}2J0;MUTT$/&7fi+pLHS A|SQA!vL[q/~/ydp0 u p!ttO,w6{CQ.N0!.,#?');
define('LOGGED_IN_KEY',    'r4K)u8klz&*Cou>`2f0/*9h 0<w3XD5{Tqa)M]$Ncvrotg>xq}3CBpc]#cg/FX`R');
define('NONCE_KEY',        '3`q,:jB)$x&oCj<taK-GI0F0v`###rhA>FY-[y[$wNe;E.P]t*&<2L_)6/CX`tL(');
define('AUTH_SALT',        '#(Mra$7gUM]iSeRCo.v.S0piK-]pV{Ws`oi!OR0|.>uZC~O%pyGV5w2UB?Nk<+gw');
define('SECURE_AUTH_SALT', '|=M+{ d,?:;b??TClYa6HW@{#*AJE.yU47!5P8)X#N2NM=uP}LP$k~So;lic!X?x');
define('LOGGED_IN_SALT',   'u~C9w:h/4a/U81(Z]?gIor0</Cc,YzkmC&a5dK+%N,}/|!(^5yqcsjU>.Q`)1XA=');
define('NONCE_SALT',       'su,o5A}9):0R>. p-kxs-#BR)!f$8%l>;-%Ie%1P&;+BT#H+MA[VY?,m(TP6(C&)');

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
