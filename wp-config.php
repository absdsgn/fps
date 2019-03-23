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
define( 'DB_NAME', 'fps' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`|oCyV6[o]T!~H?pU6&.-UCI6U)g2)}X%i]zp<4-6c3ZxS}%%(k!%vVydKxmY)iB' );
define( 'SECURE_AUTH_KEY',  'qV~&^fyW+5<gZ1.W+@5+$YD* `Mgl4mx)>J,avpmZ&(;fLGjzn[C| uwn>t=-eKI' );
define( 'LOGGED_IN_KEY',    '(q*<>=C:(,>d`Ro]/R@9YOhxhF%K(,Z~7=QA`8ryRuM;so60pM6Qv5:G|!~#kNCP' );
define( 'NONCE_KEY',        '6d9J1ZlU| }{F,}WNT&1rGHwSNV0j4/zQ`f;>|[WVoE+A+XMJvGovBHZX8fpdjS;' );
define( 'AUTH_SALT',        'Q,V4Polhz/(~f[ 79g+gKl Q,=yzb`B++!%Hyl#vS71Jo)Fg}z`VyEQTkMhLSI$^' );
define( 'SECURE_AUTH_SALT', '*obub~HwCiY@y]FK8-(=ZEn=wie=ER{j2d,-il*T`&^!(:Q7@To.UuxZ-?U}jQ%M' );
define( 'LOGGED_IN_SALT',   'u/IWB M*lqdLXBc1tq`![_x.!7_,:7#!Q9rj;ypRLf*>?Tgh2a88QMJ(pCXdo0fK' );
define( 'NONCE_SALT',       '=6lWF.d}peTJs=Jr>slt%^i]#KicgCa0Tjkr>jUphe`5~8M+0Z1_SjvAup5:M@qk' );

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
