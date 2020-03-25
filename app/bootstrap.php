<?php
define('DS',DIRECTORY_SEPARATOR);
define('SITENAME','ch');

require_once dirname(__FILE__).DS.'fpdf'.DS.'fpdf.php';
require_once dirname(__FILE__).DS.'vendor'.DS.'autoload.php';
 
define('APPROOT',dirname(dirname(__FILE__)));
define('LANG','fr');
define('DB_HOST','localhost');
define('DB_USER','u958902108_charam');
define('DB_PASS','Westham66!!');
define('DB_NAME','u958902108_aram');
define('URLROOT','http://localhost/ARAM');
//define('URLROOT','http://www.aram-clinic.com');

spl_autoload_register(function($className){
  require_once __DIR__.DS.'core'.DS.$className.'.php';
});


// my file to redirect all request to https after buying it from host 
// # route every thing to url var 
// <IfModule mod_rewrite.c>
//     Options -Multiviews
//     RewriteEngine On
//     RewriteBase /public
// 	   RewriteCond %{REQUEST_FILENAME} !-d
//     RewriteCond %{REQUEST_FILENAME} !-f
//     RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
// 	   RewriteRule ^(.*)$ https://www.aram-clinic.com/$1 [R,L]
	
// </IfModule>
