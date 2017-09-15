<?php
//MariaDB settings
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

define('AUTH_KEY',         '3d89226db51dee85fd256e1156c937b58230a207');
define('SECURE_AUTH_KEY',  '0b132855802ae67878fb6913d0417b6765f97b73');
define('LOGGED_IN_KEY',    'a0c8dc62f331a9801edcc9d4e6430a15f2c943ff');
define('NONCE_KEY',        'e5690d3b4961c05b9d8ad8f7bdce3034b2ea05ee');
define('AUTH_SALT',        'e90363312c14841f76a262a9f87ff73b9ab4864a');
define('SECURE_AUTH_SALT', '62ad13658b314604c8cb3e4ca16c0cde96d378ee');
define('LOGGED_IN_SALT',   '6f42ee562747c592155498e89019bb910ae42b18');
define('NONCE_SALT',       '2eeb3018afd8798902a698de203d1e2ec7a20e4a');

define('WP_REDIS_HOST', 'redis');

define('WP_DEBUG', false);

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
