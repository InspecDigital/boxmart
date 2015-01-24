<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'screwupsdev');

/** MySQL database username */
define('DB_USER', 'screwupsuser');

/** MySQL database password */
define('DB_PASSWORD', 'screwupspass');

/** MySQL hostname */
define('DB_HOST', 'mysql.fbpllc.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '8[bU(yn;|e9ZYW,`s_p-/LV#NKbzW`:0~d@]|N :yQi$+F4d*dN7FXfNA-pT*w2q');
define('SECURE_AUTH_KEY',  '+e#ZJ21]f=XBCqA%_3*sQ43x/l0&Y^y=>X|:V+Q^--s||(vp,$.-($g;XFeW7OwT');
define('LOGGED_IN_KEY',    '5B, WF=swODGqlMfm,TwI9P%>v+3#9o%hjCrA`zWYMW,uOrY/>@g:4QJ.y^8}[uo');
define('NONCE_KEY',        ',c(KJexXrj^Wbe>$JlY)d*!+h9Z}B#jQ{]z%Z{)A9J+!XDC#UWjU5pioQ[a<TGuG');
define('AUTH_SALT',        'R__it;Fxya70l=eGkE&ui5s_UpL[0;A3$$wrm?uBX6@)-jn|5cwI4GjLt7$n73eF');
define('SECURE_AUTH_SALT', ')w/d(I`Ar;O]/-g%pxT)R}7RQ-x0,K./*[Dp4t@t+pQ>7dB|50NI1g>|=$E42?OX');
define('LOGGED_IN_SALT',   '%?mL nkl)Y|XM^gtR0laqalBs{U2-wSC#I~!R,V$tMQ{KT=(i:l&R0]N^;6XjyU%');
define('NONCE_SALT',       '+l}|JB#e(b-c6!#o*nS79S+FnwO:*r[]jneumclHH5 ShQlsN+Iw{xHcY&^WhGy9');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
