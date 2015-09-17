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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'jk-i2$r>qf-{^StS{2+.]x%(q~x:RAZE!;kW]LIkWIoHINC|+NSHnTOd7T*/zjMV');
define('SECURE_AUTH_KEY',  'ic<D]wk_s6MdOTw^S|g50,^c!D5n@B9WK`sd_)db8C.$=>OQX-bMhG){d30B@%?6');
define('LOGGED_IN_KEY',    'Dae=]Mxn{mD|)VwwT3*W]|@._L4n~ln%i/($6-Pb)YzpB~@3nvX+OB7p5vL2Y4%4');
define('NONCE_KEY',        'tj0p79+}y?7wl)m5+Eq/ IPiidsk:_C,+~jiK]LC?_~+rw5@<2tQm5lCh)23lTk[');
define('AUTH_SALT',        'y5nA=&5ac@v,/DLAD]*D%Nq[P(J4C&@[rTN1_:G#auzZ.k qR8EX+8tbtO-=Y ]K');
define('SECURE_AUTH_SALT', '}r`+,ew=Ijx`a#mpC 2}bXDgk/ud`&j+X;&:MiDx+m*oW7.i*$.52A9j.6!-Qowq');
define('LOGGED_IN_SALT',   '$6w+]lPCXu6IXGpg&p!jko(Pu6Ua/67.w{RJtxUGKNq%*pwNT*tb-T^WDy|+FcTS');
define('NONCE_SALT',       'bUf!98BfE`~jceM~eKU --|{~Q&H@>JOr-_|aD)&sBdtrzh<On#nWe+l+S+ruJ0L');

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

define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
