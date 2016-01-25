<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#k3VsB6pk]>$^vwA;&h!pFRI-zoS$E$We?=xUX{@6O9,i:)}V&k)&7YmG_BF1aec');
define('SECURE_AUTH_KEY',  '?knZ7~0Qi5k@[0Q|0pk9T)gpT`)>K~8@e>`pkcf@r|N@K.yD:Q+^n1Clq6gN,=y;');
define('LOGGED_IN_KEY',    '?A~E}l+zsLqpjy7L4A</|2aN?!Idn_jb.v}t7:buj9-lx0[5o(f-RF00N!6uvc6l');
define('NONCE_KEY',        '8vN -&7?$.}K/vwW+Dd<3},P.1O2)E`+-Ev@-i|VcxDSEtN?%$3J!TR7F;w|:@Jk');
define('AUTH_SALT',        '_G5+awx-_h>P|][HCpT7*Yct3#hr7UUQ%)6c|sK)Q(};p;^PXNxn--6Bo>#(mNc)');
define('SECURE_AUTH_SALT', '$>Fm~;z[?@c?|}-fl.,XuH$ g4M@C+q%HW>ResO%F`8y:kJKh)lSY{<x~.OY;CR{');
define('LOGGED_IN_SALT',   'kKY_$^syH?YM&u|IAp|=gf>:4F60~g;|9mQyIIA}bR2pCZvfv1-A-sbotY2+f;;P');
define('NONCE_SALT',       '%/P!zK+v`&.,%?S_lb{KQw[X~c!ZYh/oa35fU-HkRa T-)C0j),`7>F>Tgx#_K=R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
