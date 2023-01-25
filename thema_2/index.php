<?php
require __DIR__ . "/inc/bootstrap.php";
require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";
require PROJECT_ROOT_PATH . "/Controller/Api/GradeController.php";
const ENDPOINTS = [
    'user' => new UserController(),
    'grade' => new GradeController()
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

for ($i = count($uri) - 1; $i >= 0; $i--) {
    if (array_key_exists($uri[$i], ENDPOINTS)) {
        $strMethodName = $_SERVER['REQUEST_METHOD'];
        $objFeedController = ENDPOINTS[$uri[$i]];
        $objFeedController->{$strMethodName}();
        exit;
    }
}
header('HTTP/1.1 404 Not Found');
exit;
?>