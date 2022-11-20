<?php

class Toolbox {
  public const ALERT_RED_COLOR = "alert-danger";
  public const ALERT_GREEN_COLOR = "alert-success";

  public static function addAlertMessage($type, $message) {
    $_SESSION['alert'][] = [
      'type' => $type,
      'message' => $message
    ];
  }
}
