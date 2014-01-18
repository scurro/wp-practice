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
define('DB_NAME', 'school');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@iH:-)CIW<@2!lj~]@-*]V&l7|SKhG36f_l7jjrx)X%;/~||&|)]Ry6A7u5gH^D;');
define('SECURE_AUTH_KEY',  'ogC?;ejA_EC$`b%{~hkKcUc] @?cql$qXXPl8|)-Av>X&gZ(id8:YF^-)%aepn=K');
define('LOGGED_IN_KEY',    'DwJ`%kB>2JCLq;t(MPMpl`2C6GLhi/mz|4L<Q-pU$r|JF(3E7.-`UY  qb},L@Vv');
define('NONCE_KEY',        'XpWdkM$n.ng-jqS+vPgmqZSz{b|jUj|K?hj!m|.p_<e=a_>KTQP_OIeV;m<ux)$-');
define('AUTH_SALT',        'qBFao*6| $|(Lr`f6+WT=pbY@MopKZ5k]shKl,LN;i[u[x2~9fN681h>=8xO@]7d');
define('SECURE_AUTH_SALT', '|rc}j?`a#[^UJqMWj,Qv^:]FZc5/,uw!^Djf4c!>8c7.`kZ9`*BP&--4N8nw8 >u');
define('LOGGED_IN_SALT',   'hK91FTqCE!&5+}Sq<Y.BCYa:FY8mH?c5J@Ih+m&x/plX^yV7d?,Fb7.sEG0^//~;');
define('NONCE_SALT',       '>U3|a;ryevZ)cT]B[$%<4C:wlJ/]=-sCd!)&*^A&bY-KYkMjQ{i9%28xBZZ1+Zr#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Ags23_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
