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
define( 'DB_NAME', 'qw' );

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
define( 'AUTH_KEY',         'p:M^sKEywP&QUh]`S|W%9e]?^6en*ye0f Xl{uJ6w/zHTw([(>M]Sk $bd$_~5+P' );
define( 'SECURE_AUTH_KEY',  '| -S1SUE_:TZ>]@Z8:QY2?J}(F8+5wOREtt&@kU2H,n,Sh^;Z0u)a)D7LnBIBn7r' );
define( 'LOGGED_IN_KEY',    'x:_.90/Ks<}1 K48ALtF`K}7lv6D)fwa)YUM`fn`BR^2BLH{Vl3P)W<.[2~b%2@O' );
define( 'NONCE_KEY',        'a,$]#aI]pF@S3!^qK)E5=k,tW*#t%ajO9Ec8#t=P&Ak=)_/EKwI$N|)TO**VTv-f' );
define( 'AUTH_SALT',        '/]^zC{z$w=YJbRkxJ^dEXR Tprc4QR S<!g(+po?R T8Z6i~:_XS9e@ZXQ2@AS19' );
define( 'SECURE_AUTH_SALT', 'JE,ju4l/$hFI?<=^PaiQT_r4|yl%:!X -{v5C.F^ $%1sLC%Q|}&<j4hQqfIyy|L' );
define( 'LOGGED_IN_SALT',   's</bQ{}cQgkV%3}Wh.P8p&[b>-6eQd]ub0%)hI5PXxl#&,)?Oc/^&]tX2j5:*b/I' );
define( 'NONCE_SALT',       'HL@_<<MEQ1gJoLADGD4!>MXza#^91-3hK>Z+&C`qG~^cjgrc/{bEP%${SMK--g58' );

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
