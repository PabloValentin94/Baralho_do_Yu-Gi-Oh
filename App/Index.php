<?php

include "Controller/MainPageController.php";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{

  case "/":

    MainPageController::Change_Card();

  break;

  default:

    echo "error 404";

}

?>