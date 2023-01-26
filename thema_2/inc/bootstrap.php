<?php

const PROJECT_ROOT_PATH = __DIR__ . "/../";

// include main configuration file
require_once PROJECT_ROOT_PATH . "/Model/orm_example.php";
 
// include the base controller file
require_once PROJECT_ROOT_PATH . "/Controller/Api/BaseController.php";
 
// include the use model file
require_once PROJECT_ROOT_PATH . "/Model/User.php";

// include the use model file
require_once PROJECT_ROOT_PATH . "/Model/Grade.php";

?>