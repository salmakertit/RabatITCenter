<?php
  session_start();
  include("Model/models.php");
  if(isset($_GET['action']))
    $action = $_GET['action'];
  else
    $action = "home";
  if(file_exists("Actions/".$action.".php"))
    include("Actions/".$action.".php");
  ob_start();
  if(file_exists("Views/".$action.".php"))
    include("Views/".$action.".php");
  $page = ob_get_clean();
  $gabarit = "gabarit.php";
  if(isset($_SESSION['ACTIF']) && $_SESSION['ACTIF'] == 'YES'){
    if($_SESSION['TYPE'] == 'a'){
      $gabarit = "gabaritAdmin.php";
    }
  }
  
  include("Views/".$gabarit);
  error_log("Views/".$gabarit);


