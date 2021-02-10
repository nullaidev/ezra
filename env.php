<?php
/*
 | Ezra Database Table prefix.
 |
 | You can have multiple installations in one database if you give each
 | a unique prefix. Only numbers, letters, and underscores please!
 */
define('APP_TABLE_PREFIX', 'ez_');

/*
 | For developers: Ezra application environment.
 |
 | Possible values are 'local', 'development', 'staging', and 'production'.
 | If not set, the type defaults to 'production'.
 */
define('APP_ENV', 'production');

/*
 | For developers: Ezra debugging mode.
 |
 | Change this to true to enable the display of notices during development.
 | It is strongly recommended that plugin and theme developers use WP_DEBUG
 | in their development environments.
 */
define('EZRA_DEBUG', false);


/*#@+
 | Unique Salts.
 |
 | Change these to different unique phrases!
 | You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 | You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 */
define('APP_SALT_AUTH', 'unique_salt_goes_here');
define('APP_SALT_CSRF', 'unique_salt_goes_here');
/*#@-*/