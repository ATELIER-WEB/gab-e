<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gab-e_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?.*i[oraErU)45NxV-c~c+$-$QeW.@4]lW8)X8l%60;7s3YpC_H^>VdvTz6x2Jy;' );
define( 'SECURE_AUTH_KEY',  '<h;LoHa?~e5=1Yp$}[?]*>Izq<fR)PJmfl#l,Bs1qXT:V1E|;,-4OD *A_Tq-O7S' );
define( 'LOGGED_IN_KEY',    '+:@C+.b(nLI-J<7h]Ra |r0}KZ/)ksrt.iH(9*`X<8kpQ*kP!y6Y0gyKN}hVMFB1' );
define( 'NONCE_KEY',        'xHq%afV#cVzyOs>?oBvJTE4y-n0yd7;zpyhKQT#>A4*F$/R]gK=;iv$uohR[nd:i' );
define( 'AUTH_SALT',        'wz`3sRaee~I;ijC:>Sm+^b.!!{5W[Nv(1cL;Fmjlax/@Lr0/<}HRh+-i>ej&s#S5' );
define( 'SECURE_AUTH_SALT', 'tb3^__Lf{DN1L`NMz,Z.Ws2}&nwaKi.5`;J*u=#lkpwMSCCkZ;?+gz(i5+}K@+L{' );
define( 'LOGGED_IN_SALT',   'b`}V:BZVmTu?L_X%!KvKk;al c[3;Fv^4|297bi(Yi++#?!!^t3:r_ vn#wf$)9i' );
define( 'NONCE_SALT',       'S9-.KTe(?9JoA_xdaao3z[xF4W7(yl9H`.~+m^Mc>)/N%BKM]i+VG%t3fDIgP+Zq' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
