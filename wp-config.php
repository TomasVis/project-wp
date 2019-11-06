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
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DaProject87' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '05nVAAf3H%d!Nl.L3gj8lE?4cy G!$Q_272ER!Q(YQLyVo}+^r;8M2!s`M](4jG<' );
define( 'SECURE_AUTH_KEY',  '6 &B6V}?L9RsWw#~$}!o0 x[?[m>lc2(|@E8f5XzW:5G`z@%1SU]MOrhW`ovbCIb' );
define( 'LOGGED_IN_KEY',    '15Ea*l-$FvNqO@sUnpVYU-xac%Pt:Y>%MpS.+pt9CH(2zr8PrFp2PJ0<0*WuE}?q' );
define( 'NONCE_KEY',        's9&z>t4i]}PTp}atfaz#)%R1$ ups$tqJRl.M5LuB+)ky_:;)Eqo628,$`m|E.Z{' );
define( 'AUTH_SALT',        'DS;)eQW)DIR~g4E`fDNyei6.4c}?>#MOUI7$Yz;X7Ss9}|<>j3</@ipS_GHu kj8' );
define( 'SECURE_AUTH_SALT', 'sgkV-Wt/}VE%iva>vy-]@)sZXEOZz/0-o+!I:V[&hBM9*ydfE%y=Oei8uNkp3Mm/' );
define( 'LOGGED_IN_SALT',   'B9epEvm}@)_7c4)!`_CPE~w?/@my&JrMusp^W~mJZn^#H2?@xlz?-5mCn0t%*jTq' );
define( 'NONCE_SALT',       '.},-Y;F@+)<#nI(E/uD3GVovZ!1TJV+5~1FR,#7E^WZw/Qp-=#H)9S?fUYY`%0t!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
