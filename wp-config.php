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
define('DB_NAME', 'ivan');

/** MySQL database username */
define('DB_USER', 'ivan');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H{xW9p=t1Hd<j,JF`GSC;O4Gh{z$00-#+,Y$AU~G2r/vbs/FH*SVu50a]15JT#S0');
define('SECURE_AUTH_KEY',  '~a#[BRWb3H;7_9?0_WfS&;0RK$lj?>3:27Vkgp[j{8*,5.cW%y`>F.xQRmASnM8A');
define('LOGGED_IN_KEY',    '#[O<Oz&%V[euCzH4e!f[&U[u++o1h~cNKb<!^4%NT|kHVe*.qPP+#SdW 0d~D/8#');
define('NONCE_KEY',        'sXz&}.Z}4C6z[?m.^`7,x+)0N5urtFDTi&xP%JD]AcHFkV2j;zIPgMQOIz9I4z-|');
define('AUTH_SALT',        '(<{-Hk,$)dxg!w$&7rw?dr|-!L$4b)8HgT9m!k2D^l3QWx~^nhEc6YlrqBU4iLHg');
define('SECURE_AUTH_SALT', '%RmaPa0:BRiDeD5dVYBv>Cv/<y(&1gzl7+ 6)))kt8At`7(6n&C{{}F%K(rPe1a8');
define('LOGGED_IN_SALT',   'bV<PAG/oxZ1 o.VW<CV#32pP]1=7yn1<gp1R#f1>6T B!5`-LFfA$gw(AZL_d4{C');
define('NONCE_SALT',       ']bQXs][W=*QpGBy[S~b1R:=K8GhNZ([2NCh_>t+Aps[g?0z/ar:#u&!Zfj2uq;BZ');

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
