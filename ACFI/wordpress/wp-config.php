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
define('DB_NAME', 'acfi_lib');

/** MySQL database username */
define('DB_USER', 'acfi_user');

/** MySQL database password */
define('DB_PASSWORD', 'acf1l1b3r1a');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'P+Mb=Z$m.B|!H7+p6Lt!M2:GBsh9Ha(@M},(u<pvJ-#E>{0O&G!EXKd+-QA<s1Op');
define('SECURE_AUTH_KEY',  'iN8H:Rb7Ht0Z_*-n22>%J-PgW/S92?6UUUtH:>+^jBhdUmFLXn2a{@afFL-X=}W(');
define('LOGGED_IN_KEY',    '2*wz4KR@Tfh>Waz /qGZo[=#>B*EK/thQ- o[^ki_+1S$]G~2dN_?hxM~KQ+AxgT');
define('NONCE_KEY',        '_wdeU!Ea8(bh%WhaR+zQCG]F9;RAs=myE-:*~pbkQhP?]{:X8:b+!@;|+B,P^-jr');
define('AUTH_SALT',        'e}AD@%d>jd(qO<}c3./||<qrtFWm;2jlFs4&K@Q`Lrete #5y|987FAy4=@#PJ8:');
define('SECURE_AUTH_SALT', '}=(1 ^j0gN9rh8[+-z7ik5o-TZ*TJ2{]m2^2#w^OI|MPYIphVX,l8YbA4 Ryf^_-');
define('LOGGED_IN_SALT',   'DK,ye?%Hm5,L3;-CV^Dws#4p:)qNDstERkjgRa`VgNblls:w<~6w*tzI!64v=3t/');
define('NONCE_SALT',       'k?>1f>+S?{r[+lJ2.iB{r7 nH|i40:[W7otP-S+qpyo=#5.or};RLy|.as3+N;|L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_acfi_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
