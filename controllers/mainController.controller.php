<?php

require_once "./controllers/toolbox.class.php";
require_once "./models/mainManager.model.php";

class MainController {
  private $mainManager;

  public function __construct() {
    $this->mainManager = new MainManager;
  }

  private function generatePage($pageData) {
    extract($pageData);
    ob_start();
    require_once($view);
    $content = ob_get_clean();
    require_once($template);
  }

  public function accueil() {
    $datasDB = $this->mainManager->getDatasDB();

    Toolbox::addAlertMessage(Toolbox::ALERT_RED_COLOR, "Message alerte rouge");
    Toolbox::addAlertMessage(Toolbox::ALERT_GREEN_COLOR, "Message alerte verte");

    $data = [
      'metaDescription' => "meta description de la page d'accueil",
      'title' => "Structure MVC",
      'pageCSS' => "page1.css",
      'datasDB' => $datasDB,
      'view' => "./views/accueil.view.php",
      'template' => "./views/common/template.php",
      'pageJS' => "page3.js"
    ];
    $this->generatePage($data);
  }

  public function errorPage($exception) {
    $pageData = [
      'metaDescription' => "Page de gestion des erreurs",
      'title' => "Erreur 404",
      'message' => $exception->getMessage(),
      'view' => "./views/error.view.php",
      'template' => "./views/common/template.php"
    ];
    $this->generatePage($pageData);
  }
}
