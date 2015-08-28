<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'leboskincare_wp');

/** MySQL database username */
define('DB_USER', 'lebo_wp');

/** MySQL database password */
define('DB_PASSWORD', 'L3bosk!nc@re');

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
define('AUTH_KEY',         'nRMwzGOkhniLCGCxS8PxweFz1K4rly0W1CccMO3T5pSln6OhYYJ5jQ2HbkbdDu7i');
define('SECURE_AUTH_KEY',  '4m4aGsQFHpO4SVBhE2Ntq8aqNa2i5YrOugAjvDGueY0ytITkk1BXsOHmlAulMQOs');
define('LOGGED_IN_KEY',    'wrIsfslQTwT1aOD4MJwcXAV0kiMB9kp96BWL00CEChEqYEu16Y2QjDT7d6PatcIt');
define('NONCE_KEY',        'HpKZuilhVTm1OxMQFZ8zP7A5CuCwmpFGEqmYQsQ2zNKyA1DME8uubse5CGZuQ7Jj');
define('AUTH_SALT',        '1V6oxsGwhhb1kcqmcVA74nlC7uQ2xJTvvOOo4SQtX1nrnkWB0MaHEzBiMnsuFpi9');
define('SECURE_AUTH_SALT', 'fq8ZNkbdWaiBBuapnpU4ejQUJqrR6vLqdMI88Weiwf5IkmWAG8H4rLgvXvdDBIiy');
define('LOGGED_IN_SALT',   'zI4t4HhP1aOp2Na060YmHphT4zMwI782t9MKe8IdsNJbVb9yaRzyaU842sa24pcf');
define('NONCE_SALT',       'Ees67VgK2sLtKE07VVR5I35uvIRfNtFtpnfVsruuGZaFmUUWtwUcCrcSrk1nfH9A');

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
