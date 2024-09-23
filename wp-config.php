<?php
define( 'DB_NAME', getenv('WORDPRESS_DATABASE_NAME') );
define( 'DB_USER', getenv('WORDPRESS_DATABASE_USER') );
define( 'DB_PASSWORD', getenv('WORDPRESS_DATABASE_PASSWORD') );
define( 'DB_HOST', getenv('WORDPRESS_DATABASE_HOST') );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/** Chaves de autenticação únicas */
define('AUTH_KEY',         'coloque sua frase única aqui');
define('SECURE_AUTH_KEY',  'coloque sua frase única aqui');
define('LOGGED_IN_KEY',    'coloque sua frase única aqui');
define('NONCE_KEY',        'coloque sua frase única aqui');
define('AUTH_SALT',        'coloque sua frase única aqui');
define('SECURE_AUTH_SALT', 'coloque sua frase única aqui');
define('LOGGED_IN_SALT',   'coloque sua frase única aqui');
define('NONCE_SALT',       'coloque sua frase única aqui');

/** Prefixo da tabela do banco de dados */
$table_prefix = 'wp_';

/** Modo de depuração do WordPress */
define( 'WP_DEBUG', false );

/** Configuração do WordPress */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
?>
