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
define('DB_NAME', 'bridgecap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A4[QiB|Dm=:7+D&jcwib{~->AA`1KL{{?[p<KX:iBd|_nB%lR.SxjN,&l>e.pCR-');
define('SECURE_AUTH_KEY',  'cO?4k+F)U4s@9.:T)x^8L2 N` U`Ng)ni &igu0-fcv#sS1D4hfy5}6A(bUA4e[a');
define('LOGGED_IN_KEY',    'MdVUM7e$A<M5EK7W!w<[w/:=`Jjuf-5BPmHP=IlQ*|DG0.bVUuL9NV%G>yKbQ}1O');
define('NONCE_KEY',        'N-!xfd(Y(b_Q)LZ<qYe*>sEo`LB( CaF/#[6x>x $rZI-`q0d@sZ-}rF)5gRD1Tb');
define('AUTH_SALT',        'EhT!}W9bXUWhWTKh:xI|g]:|kEL6DYPenI#f`Crfm$i%-gZ&[jincYxi|ATA<,Oo');
define('SECURE_AUTH_SALT', '$mQxZ+KMkaYt;|i0c1fLQPOp}!5eIcJ*y~i<$pmX];]#U$5pzhc:b,9tygL.`O*!');
define('LOGGED_IN_SALT',   '3}=18}kRB>,hyyRTtm5 ]||K>D,Ce#b,qNg:6vwv@SA!9G*5@t^(75~x%^%Gg~:T');
define('NONCE_SALT',       'mpG`MS1YLA4OEr!ca[6;9[A:$CzzrQ(Ma KadS7~o5xv~c8gf]iS,t%&8-/s5ACB');

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
