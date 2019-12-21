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
define( 'DB_NAME', 'wordpress-ukeys' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'm(m{l,PMh9j2FsYpn$m0!0gSu5$gHN|`5RZlYhNsl;.|GfhWaIqE:99B2<Z3r,?t' );
define( 'SECURE_AUTH_KEY',   'Ifnc];#?6J2_619Xso@q}_}<BEkRU:I`DEEoJXNNZwZW.]_dbRa<a_-1JwEu)my0' );
define( 'LOGGED_IN_KEY',     '5K6L>UpR.#bWX@Q&)%:oXvm:xC}c_2FAc]-H=YSMz]tMCemsePgf/&j?N=s+9l^#' );
define( 'NONCE_KEY',         '^`z}lmRr,0]puj#+K.JJSv$,;pYeN/,H03A&OK1QdOL1aJW%hN@bP%x!8zX[Um^M' );
define( 'AUTH_SALT',         ']8}B9z#,fk#yQrrhKY<9t>8g:EFFsoeg({QX=IFQ)Bf#g[f<<Z5,Z ^/auuW kQ^' );
define( 'SECURE_AUTH_SALT',  '%w#&Ahc 7K90;R>p=;XZj5^j dbZgX%@WpR5;U.&D08u%%oz~jwUWw>Q^o=@ $yG' );
define( 'LOGGED_IN_SALT',    '4-$a~i?P6F=(<6thp/%v|c$UADG )}l$#5dKx5w`04$IKiiz8=MX1+Pq8(;@Ffjg' );
define( 'NONCE_SALT',        '.Gn8nvwHe%t;/69 ozRTi.Uu&]dzo;<L$+?o|xQ,cizNP0U^N2j)?n/iCm ZU<P)' );
define( 'WP_CACHE_KEY_SALT', 'kLYa)-f#-<4BGo*LcuyA}NtU@) 5L:y75^SCaC~oxCtF#P5B6B1U!2GZo.l>w+bF' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
