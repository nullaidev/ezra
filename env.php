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
 */
define('EZRA_DEBUG', false);
define('EZRA_ERROR', E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR);

/*#@+
 | Unique Salts.
 |
 | Change these to different unique phrases!
 */
define('APP_SALT_AUTH', 'unique_salt_goes_here');
define('APP_SALT_CSRF', 'unique_salt_goes_here');
define('APP_SALT_COOKIE', 'unique_salt_goes_here');
/*#@-*/