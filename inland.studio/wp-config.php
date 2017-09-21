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
define('DB_NAME', 'db1026587_inland');

/** MySQL database username */
define('DB_USER', 'u1026587_inland');

/** MySQL database password */
define('DB_PASSWORD', 'm4wKhlt@Qu');

/** MySQL hostname */
define('DB_HOST', '10.7.4.32:3306');

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
define('AUTH_KEY',         'q!_CVx@.VN~cq=r^37}a%PVr@g`192Q/-UZBs{>#glU`h!xL~QPDD/u XF~0!8=6');
define('SECURE_AUTH_KEY',  'oqcnmC*p<2LpyGG8D@.3R4-Jkk734oChn,+]AitLs6lmtl+fBJr!3dY:jMa`nEEc');
define('LOGGED_IN_KEY',    'I~XO|S{D?=3^i0o+x9j6lY?0H<+3x75,g/2}rlCjl7lfQL)ofGj!BD_,aIQb4j~!');
define('NONCE_KEY',        '0c0Zk,0jD03N(LHyf|[23gdPRKh3p-woPo)6be^(GTwJ,GDI]nNg L?V>L0kLIjN');
define('AUTH_SALT',        ')_Z54 v.D]Yk|p`YSs#xs{hLQ.=>xF/;J ~g;3yNS`Z} 7M_b`LeSS&IIDFtR4zS');
define('SECURE_AUTH_SALT', 'lM^6D+&U&d`TK2kX<M&|vMJG=SjPpb]V${A*pDmo],F/8w@l/&e*D}lgF.1!(g/j');
define('LOGGED_IN_SALT',   'F QJ`y_;E.1D:#qT)p]upy?$q]HeLV{0A2_lV7xr|k:BK}lk++n+5n(M6&:rZWy)');
define('NONCE_SALT',       '!t=&,y[<2b~&p[`pga;i}Ml{EZHvVwRf-H@[*[[N/]n,Y)5X>~Z)u_ZKw}{7#{9-');

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
