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
define('DB_NAME', 'i4385722_wp1');

/** MySQL database username */
define('DB_USER', 'i4385722_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Q.Yz~G&9LLUF#v60#L^58&&7');

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
define('AUTH_KEY',         'gHTjk2ctJG0wYUmhKrb4YQsWoc5fahBp2Vv32PhPHx7Jy6kcDrhVpWHunfHDR1am');
define('SECURE_AUTH_KEY',  'UjPGQjGqY4zjk6FQDGsB2xjfMlLBaJBz50X7F33m1DwrfqlLsg0ZhNM6TcKSLGU6');
define('LOGGED_IN_KEY',    'z1asrAfJvygSzaehTSUW9qDBT2uwuqPS8Z0KpXqXIyGTaEsqn0JAQD22aAPZMSQx');
define('NONCE_KEY',        'C0wDuhoLSolldoEcMDPMKc5IOM5TzCQa4cewsXUQwc5ibmXUdhnsmfA9HzbYohe7');
define('AUTH_SALT',        'sh1DP7wdMbr5kMeUtNsRVVoIkyjyZXWILrHUUeF7Wo4ZHe0v4oNN0KIi4kfqfKpP');
define('SECURE_AUTH_SALT', 'GU9ujduqyYofw3If2su7HZk0OYAZc4tUaBaFnhgaMmz70CUqzmdg0x10xSmAk5qc');
define('LOGGED_IN_SALT',   'Tr6EUY8zWo8U83g0Gt8u6MnarR3aJKErb27xUxmFjQUHXqpYFbBDUjchO2GzwnuJ');
define('NONCE_SALT',       '7rert50Pnw21OYol0f95dTz4DIaQz8830kNjfnp1Zix3ba367X8oOqBJPhG6hMiX');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
