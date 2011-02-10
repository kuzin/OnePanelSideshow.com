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
define('DB_NAME', 'db54869_onepanel');

/** MySQL database username */
define('DB_USER', '1clk_wp_62mcJ7P');

/** MySQL database password */
define('DB_PASSWORD', 'wjUDa7L4');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

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
define('AUTH_KEY',         'FgkLTcls WeAzYLAL ScAPLG47 ZBkN5LuE j6mQYqZx');
define('SECURE_AUTH_KEY',  'hmbURAPm LykNLfyu 7nRqMoLC sPLxV58y wvscHjTm');
define('LOGGED_IN_KEY',    'cEsmikXl LaoP7HIr fmftIJK1 xBQEAAQP VsJiWBDH');
define('NONCE_KEY',        'gQU67ZaL 1iDUxM15 Y3tKC3cY YTjQN1Lo hVhoNdmA');
define('AUTH_SALT',        'zKLaoD6n wJHdslw3 dDIGZJqp ENESyVMl pTFzCbif');
define('SECURE_AUTH_SALT', 'PR2vZCX3 nX2fWWw4 TmFbq12A DHboD3k6 igadE6jC');
define('LOGGED_IN_SALT',   'm24rhbPD iAVmCQZa nWJdmUrZ NUKQaiJC HVgbBUyq');
define('NONCE_SALT',       '6X6UYJXB LunPPobD yJPhHOne a34QS46a bNvnbt68');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_onepanel';

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
