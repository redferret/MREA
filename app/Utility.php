<?php

namespace App;

use Illuminate\Support\Facades\Storage;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Utility {

  public static function getDBColNamesFromFile($fileName) {
    $dbnames = explode("\n", Storage::get($fileName));
    for ($i = 0; $i < count($dbnames); $i++) {
      $dbnames[$i] = str_replace("\r", "", $dbnames[$i]);
    }
    return $dbnames;
  }

}
