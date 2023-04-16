<?php
require_once("php/score_controll.php");


// Start the session
session_start();

// Retrieve the global variable from the session
$sezona = $_SESSION['sezona'];


//API.php?action=togglePostLike
// function that we call from our JS code that processes the request and calls actions that execute queries
function processRequest(){
  $success = false;
  $reason = '';

  $action = getRequestParameter("action");

    // action that was called
    switch ($action) {
      case 'NewScore': 
        proccessNewScore($success, $reason);
        break;
      case 'NewKuća':
        proccessNewKuća($success, $reason);
        break;
      case 'NewKuća_Svima': 
        proccessNewKuća_Svima($success, $reason);
        break;
      case 'NewSeason':
        proccessZavršiSezonu($success, $reason);
        break;
      default:
        echo(json_encode(array(
          "success" => false,
          "reason" => "Unknown action: $action"
        )));
        break;
    }
    
    echo(json_encode(array(
      "success" => $success,
      "reason" => $reason
    )));
}

// getRequestParameter("action") -> "deletePost"
function getRequestParameter($key) {
   // $_REQUEST[$key] -> a map of keys and values from the request
   return isset($_REQUEST[$key]) ? $_REQUEST[$key] : "";
}

//API.php?action=toggleCardLike&id=1&liked=1
function proccessNewScore(&$success, &$reason){
  global $sezona;
  $bere_bodovi = getRequestParameter("bere_bodovi");
  $tonći_bodovi = getRequestParameter("tonći_bodovi");
  $muni_bodovi = getRequestParameter("muni_bodovi");
  $biuk_bodovi = getRequestParameter("biuk_bodovi");
  $ciko_bodovi = getRequestParameter("ciko_bodovi");

  if(is_numeric($bere_bodovi) && is_numeric($tonći_bodovi) && is_numeric($muni_bodovi) && is_numeric($biuk_bodovi) && is_numeric($ciko_bodovi)){
    NewScore($bere_bodovi, $tonći_bodovi, $muni_bodovi, $biuk_bodovi, $ciko_bodovi, $sezona);
    $success = true;
  }
  else {
    $success = false;
    $reason = "Needs bere_bodovi:number, tonći_bodovi:number, muni_bodovi:number, biuk_bodovi:number, ciko_bodovi:number";
  }
}

function proccessNewKuća(&$success, &$reason){
  global $sezona;
  $bere_bodovi = getRequestParameter("bere_bodovi");
  $tonći_bodovi = getRequestParameter("tonći_bodovi");
  $muni_bodovi = getRequestParameter("muni_bodovi");
  $biuk_bodovi = getRequestParameter("biuk_bodovi");
  $ciko_bodovi = getRequestParameter("ciko_bodovi");

  if(is_numeric($bere_bodovi) && is_numeric($tonći_bodovi) && is_numeric($muni_bodovi) && is_numeric($biuk_bodovi) && is_numeric($ciko_bodovi)){
    NewKuća($bere_bodovi, $tonći_bodovi, $muni_bodovi, $biuk_bodovi, $ciko_bodovi, $sezona);
    $success = true;
  }
  else {
    $success = false;
    $reason = "Needs bere_bodovi:number, tonći_bodovi:number, muni_bodovi:number, biuk_bodovi:number, ciko_bodovi:number";
  }
}

function proccessNewKuća_Svima(&$success, &$reason){
  global $sezona;
  NewKuća_Svima($sezona);
  $success = true;
}

function proccessZavršiSezonu(&$success, &$reason)
{
  global $sezona;
  $sezona = $sezona + 1;
  NewSeason($sezona);
  $success = true;
}

processRequest();

?>