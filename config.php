<?php


date_default_timezone_set('America/Sao_Paulo');


/** O nome do banco de dados*/
define('DB_NAME', '-');
/** Usuário do banco de dados MySQL */
define('DB_USER', '-');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '-');
/** nome do host do MySQL */
define('DB_HOST', '-');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');
if ( !defined('DBLOGIN') )
	define('DBLOGIN', ABSPATH . 'inc/logica_login.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
