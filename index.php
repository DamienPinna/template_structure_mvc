<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

require_once "./controllers/mainController.controller.php";
$mainController = new MainController;

try {
  if (empty($_GET['page'])) {
    $mainController->accueil();
  } else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));

    switch ($url[0]) {
      case "accueil":
        if (empty($url[1])) {
          $mainController->accueil();
        } else {
          throw new Exception("Page inexistante");
        }
        break;
      default:
        throw new Exception("Page inexistante");
    }
  }
} catch (Exception $exception) {
  $mainController->errorPage($exception);
}
