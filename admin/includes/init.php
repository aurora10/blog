<?php
defined ('DS') ? null : define ('DS', DIRECTORY_SEPARATOR);
define ('SITE_ROOT', DS . 'Applications' . DS . 'MAMP' . DS .'htdocs' . DS .'sites' .DS. 'blog');
defined ('INCLUDES_PATH') ? null : define ('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
defined('IMAGES_PATH') ? null : define ('IMAGES_PATH', SITE_ROOT. DS. 'admin'.DS.'img');


?>



<?php //require_once("functions.php"); ?>
<?php //require_once("config.php"); ?>
<?php //require_once("Database.php"); ?>
<?php //require_once("Db_object.php"); ?>
<?php //require_once("User.php"); ?>
<!---->
<?php //require_once("Photo.php"); ?>
<?php //require_once("Session.php"); ?>
<!---->
<?php //require_once("Comment.php"); ?>
<!---->

<?php

require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."config.php");
/*objecten*/
require_once(INCLUDES_PATH.DS."Database.php");
require_once (INCLUDES_PATH.DS."Db_object.php");
require_once(INCLUDES_PATH.DS."User.php");
require_once (INCLUDES_PATH.DS."Photo.php");
require_once (INCLUDES_PATH.DS."Session.php");
require_once (INCLUDES_PATH.DS."Comment.php");
require_once (INCLUDES_PATH.DS."Paginate.php");

?>