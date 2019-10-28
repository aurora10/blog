<?php
/**
 * Created by PhpStorm.
 * User: tomen
 * Date: 2/10/2019
 * Time: 14:39
 * deze pagina zal alle includes bevatten.
 */
/*php pagina's*/

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', DS . 'wamp64' . DS . 'www' .  DS . 'blogoop');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS . 'admin' . DS . 'includes');
defined('IMAGE_PATH') ? null : define('IMAGE_PATH',SITE_ROOT.DS . 'admin' . DS . 'img');


require_once("functions.php");
require_once("config.php");
/*Objecten*/
require_once("Database.php");
require_once ("DB_object.php");
//require_once("User.php");
require_once ("Photo.php");
require_once("Session.php");

?>

