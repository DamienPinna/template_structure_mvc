<?php

abstract class Model {
  private static $pdo;

  private static function setDB() {
    self::$pdo = new PDO("mysql:host=localhost;dbname=structure_mvc;charset=utf8", "root", "admin");
    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  protected function getDB() {
    if (self::$pdo === null) self::setDB();
    return self::$pdo;
  }
}
