<?php 

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

/**
 * Caso esteja utilizando o CloudFlare, pega o IP real do usuário e coloca na variável global do servidor.
 */
if ( isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) && ! empty( $_SERVER['HTTP_CF_CONNECTING_IP'] ) ) {
      $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
}

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL Aurora  */
define('DB_HOST', 'mysql'); 

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/** Memory **/
define( 'WP_MEMORY_LIMIT', '512M' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$^omxy7]e^+S8z{UVBp5|5rt4+_3+Ng+8Cvy.ocYcV%x%ec;j:!p1pi{%dvdjdgj');
define('SECURE_AUTH_KEY',  'Y&}auj1u-4FzqHmALr%,+1{A4&8Tqy@~a5zBHo+Z{c#v/t_DOWHBt8>tl$ oPY*U');
define('LOGGED_IN_KEY',    '!6|*;)k&Q8&GCI_vy3|CSUBSamY_Isp?P5tT0jY78qx~:%3E9M$w?solHS-p:j1M');
define('NONCE_KEY',        'Y4.8*54x:KXWrP,|y=wA3vD}LvBJ!uOAyXFpe1+ZuTh>@[JgjBo-$p6J[7Y@GHMy');
define('AUTH_SALT',        ')0 CNdM,DO%mRf8*yUMVm=w1Sh2H3Ns^Ma?a}5saboe,u0L13IA8*4/)nj^b^U7.');
define('SECURE_AUTH_SALT', 'lF$uYa^Rox,Jx-n=<TPMXam-6NvmyCqy~4Y~{$d`_.td+`2m5&&1<0z%]I^QC+N*');
define('LOGGED_IN_SALT',   'OHZcuYBu:LKPKuZE>]*jOD6$+V<q7Tk}_`w6%N{nAVO,L*7Dp8,/JJkzQZ5%=GP|');
define('NONCE_SALT',       '_zJ[ f68r@3-BF[qoz#=ntZWrl`;>!UPOm1oz])m&]t7Dv?9 BLtT&z!-ZvMwWY<');

#Costumer Key
define( 'WC_COSTUMER_KEY', 'ck_9848fb88f5d98de2a987ce832d9b8b2905ff615e' );
define( 'WC_COSTUMER_SECRET', 'cs_0f282eb96e66fb75afe4013601f831ec6b0e0eed' );

define('JWT_AUTH_SECRET_KEY', 'AT03Tjq8sGB!qtgY!#C6dh&FMLwzNvPCJPIZIO29ix#p5NpM9sKC8aq#T6Q1KVlV');
define('JWT_AUTH_CORS_ENABLE', true);


$filetoken = dirname(__FILE__) . '/tokens-config/token.php';

if ( file_exists( $filetoken ) ) {
	require_once( $filetoken );
}


/*define( 'WP_REDIS_CLIENT', 'pecl' );
define( 'WP_REDIS_HOST', 'grjcpm-redis.prlkvk.0001.use1.cache.amazonaws.com');
define( 'WP_CACHE_KEY_SALT', 'compras.vivariomarevoce.com.br' );
define( 'WP_REDIS_SELECTIVE_FLUSH', true );
define( 'WP_REDIS_MAXTTL', '3600');
define( 'WP_CACHE', true);*/
define('ENABLE_CACHE', TRUE);
define('CACHE_EXPIRATION_TIME', 3600);
define('DISABLE_WP_CRON', true);
//define( 'WP_REIDS_GLOBAL_GROUPS', ['blog-details', 'blog-id-cache', 'blog-lookup', 'global-posts', 'networks', 'rss', 'sites', 'site-details', 'site-lookup', 'site-options', 'site-transient', 'users', 'useremail', 'userlogins', 'usermeta', 'user_meta', 'userslugs', 'blog_meta', 'plugins']);

/*
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );
define( 'SCRIPT_DEBUG', true );
 */

/**
 * Desativa o upload de temas e plugins e força permissão de pastas e arquivos.
 */
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', false );
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
/**#@-*/

/**
 * define('DISALLOW_FILE_MODS',true);

 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Multisite
 */
//define('WP_ALLOW_MULTISITE', true);
//define('MULTISITE', true);
//define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'web1.marketplace.test');
define('PATH_CURRENT_SITE', '/');
//define('SITE_ID_CURRENT_SITE', 1);
//define('BLOG_ID_CURRENT_SITE', 1);
//define('WP_DEFAULT_THEME', 'bone');
define( 'FIREBASE_SERVER_KEY ', '123'); 

define("WP_HOME", "http://web1.marketplace.test");
define("WP_SITEURL", "http://web1.marketplace.test");

define('ELASTIC_SEARCH_URL', 'elastic');
define('ELASTIC_SEARCH_NODE', 'elastic');
define('ELASTIC_SEARCH_QTD_INDEX', 100);

/**
 * Liga as notificações de TRIX.
 */
//define('TRIX_ON', true);

/**
 * Metodo de escrita de arquivos
 */
define('FS_METHOD', 'direct');

/**
 * Autosave interval
 */
define('AUTOSAVE_INTERVAL', 600);

/**
 * Desativar Updates
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
define('WP_ALLOW_REPAIR', true);

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');