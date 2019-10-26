<?php
  session_start();
  include("Model/models.php");
  if(isset($_GET['action']))
      $action = $_GET['action'];
  else
  if(isset($_SESSION['ACTIF']) and $_SESSION['ACTIF'] == 'YES'){
      if($_SESSION['TYPE'] == 'a'){
        $action = "adminhome";
      }
      else if($_SESSION['TYPE'] == 'r'){
        $action = "responsablehome";
      }
      else if($_SESSION['TYPE'] == 'd'){
        $action = "directeurhome";
      }
      else if($_SESSION['TYPE'] == 'c'){
        $action = "chercheurhome";
      }
      else
      $action = "home";
    }
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
    if($_SESSION['TYPE'] == 'r'){
      $gabarit = "gabaritResponsable.php";
    }
    if($_SESSION['TYPE'] == 'd'){
      $gabarit = "gabaritDirecteur.php";
    }
    if($_SESSION['TYPE'] == 'c'){
      $gabarit = "gabaritChercheur.php";
    }
  }
  include("Views/".$gabarit);
  error_log("Views/".$gabarit);


