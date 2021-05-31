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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'le_pays' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'hM0=neRZXWWeI#y=-NPT7.Nr2m%ZYfXk*?1jk>^Eqa$HdP;<X>Axx~eVw_})e~z&' );
define( 'SECURE_AUTH_KEY',  'Frgh-BPK;n/Uy]>gG<BYV3?+!}+ITOLD=rM?0,3[&,PgEFoeq9<Tj>Zk*qHY0_4t' );
define( 'LOGGED_IN_KEY',    '&Lgr4C[hr`1ykrU2o20m0/*at&_5Fx3NU~Fdh@NEZ!lLn`2Y;L;O.CW2K&mkS{y5' );
define( 'NONCE_KEY',        ')4fs}j#_.~Aq;OVb+U>Z_A<50ylXSn$qp+2j|tLK>>L>o|g(B*hC&i]l-P,Q*}>O' );
define( 'AUTH_SALT',        'wrm$/xae6/p6Zu=ETKunci5xqJN!86ZF76b6wZ,l6%l^HjPP>lW2DV7KB575|VVD' );
define( 'SECURE_AUTH_SALT', '=63ESebe=Rt]pV{K]n:nkfbW_X,b%_S>?|i5.wWMYU(G+RW5k-P:%lYE,ApE<^c=' );
define( 'LOGGED_IN_SALT',   '5 9Lt=/3G<EQ`$h_<FSz^h6$Kh@_4yGM$uM<wUz23(l=[hcT<(?+[=;ofK?>Z]iy' );
define( 'NONCE_SALT',       'ZqdX,y:(:|kR?NySzj]xT]PeBkiR{TAXPl*akv#SNkd6y&[kTFX=qXVOLM.eU ~y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
