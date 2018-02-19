<?php
//define config
define('CONFIG_FAVICON', 'http://haciendaorosi.com/favicon.ico');
define('CONFIG_IMAGEPROFILEDEFAULT', 'signup_male.png');

define('CONFIG_LANG', 'en'); //define default language
define('CONFIG_LOGOICON', 'logo_haciendaorosi.png');
define('CONFIG_LOGOHEADER', 'logo_haciendaorosi.png');
define('CONFIG_LOGOHEADER2', 'logo_haciendaorosi2.png');
define('CONFIG_LOGOHEADER3', 'logo_haciendaorosi4.png');
define('CONFIG_LOGOFOOTER', null);
define('CONFIG_SUPPORTPHONE', '2222-0000');
define('CONFIG_SUPPORTEMAIL', 'info@haciendaorosi.com');
define('CONFIG_LICENSEDUNDER', 'http://www.haciendaorosi.com');

//DEFINE META
define('CONFIG_METATITTLE', 'Hacienda Orosi');
define('CONFIG_METADESCRIPTION', 'Sin definir');
define('CONFIG_METAKEYWORDS', 'Si,Definir');

//MYSQL DEFINE ACCESS INFORMATION
define('CONFIG_MYSQLHOST', 'localhost'); //al tratar de romper la conexion hay un mensaje en javascript que seri abueno replicar para otros fines
define('CONFIG_MYSQLDB', 'book');
define('CONFIG_MYSQLUSER', 'root');
define('CONFIG_MYSQLPASS', '');
define('CONFIG_MYSQLPORT', ''); //Default 3306

//FTP DEFINE ACCESS INFORMATION
define('FTP_HOST', '127.0.0.1');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'sk101080');
define('FTP_PORT', '21'); //Default 21

//DEFINE PATH
define('PATH_HOME', $section_homedir);
define('PATH_CONTROLLERS', PATH_HOME.'class/controllers/');
define('PATH_MODELS', PATH_HOME.'class/models/');
define('PATH_VIEWS', PATH_HOME.'class/views/');
define('PATH_INCLUDES', PATH_HOME.'includes/');
define('PATH_RESOURCES', PATH_HOME.'resources/');
define('PATH_ASSETS', PATH_HOME.'assets/');
define('PATH_PROFILEPICTURE', PATH_HOME.'resources/profile/');
define('PATH_LANG', PATH_HOME.'lang/');

//DEFINE INCLUDES
require_once PATH_CONTROLLERS . 'controllers.php';
