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
define( 'DB_NAME', 'develope_wp638' );

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
define( 'AUTH_KEY',         '<6%1)2o8.PQP|>f&S]j=MlXa},Z-@P6aDopaM?C{z#^2@B-M&JXZ=VB}7>;P`SR:' );
define( 'SECURE_AUTH_KEY',  '8nc24f>og3r%lHo#p)~;>%gs4[C4KYi-criS/8]7>`MG`m%7d=1WYwN ?eyfvHra' );
define( 'LOGGED_IN_KEY',    'J}y=q<f,Uk p9~wh$ }FN0hYN7_K;]bRio1Z-avr4?Y*9iZj?@+w)> .b?#7)crQ' );
define( 'NONCE_KEY',        'Ucm@<1DuP;)w<qxJ--QmTX qyf*k[Vx9Vg#zP7Nh(ebY_nXfy;5x(AtUd#=7`r4t' );
define( 'AUTH_SALT',        '@`i2oG%v`24ZeX?H+Fp2**kCm7Q3}R6r8VQ;UlxG+{^r=T0f?G33OVTQ/:U,A?oc' );
define( 'SECURE_AUTH_SALT', 'xq,&1$s[yxSXCT:^0rZJeYVPhag%NF%brv:OCQ.F~l10NoRMc|YW.uFIYCe`{u{:' );
define( 'LOGGED_IN_SALT',   'WXpy,Qa;jNWwGr{S3E|pbKm^V6%Z.^Z9n4lL|[RVx2RPPmR{$<xnyCMhL78x.M]%' );
define( 'NONCE_SALT',       '{2|?SM[{?UTiij:T2DY$g~D8O!go~{F&-/C =bq%+-Ng8Aj_kYm?Qc5CnD.bR/5J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvp_';

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
