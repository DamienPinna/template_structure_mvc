<?php
require_once "./models/model.class.php";

class MainManager extends Model {

  public function getDatasDB() {
    $requete = "SELECT * FROM ma_table;";
    $statement = $this->getDB()->prepare($requete);
    $statement->execute();
    $datas = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $datas;
  }
}
