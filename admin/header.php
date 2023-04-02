<?php


if(file_exists("../install.lock")){
  echo '<h3 style="color:red;">Delete "INSTALL.LOCK" File in the main directory Before You Continue!!!!!</h3>';
  header("Location: ../install/");
  return;
  }

if(file_exists("../install/")){
  echo '<h3 style="color:red;">Delete Install Directory Before You Continue!!!!</h3>';
  }


require_once("Auth.php");
require_once("main.config.php");
$page_title = "";
$current_file = basename($_SERVER["PHP_SELF"], ".php");

//Page Title
if($current_file == "index"){
$page_title = htmlentities("Dashboard");
}elseif($current_file == "stats"){
$page_title = htmlentities("Statistics");
}elseif($current_file == "settings"){
$page_title = "Settings";
}elseif($current_file == "pages"){
    $page_title = "Pages";
}



//Logout
if(isset($_GET["logout"]) == 1){

    if(isset($_SESSION["adminauth"])){

        unset($_SESSION["adminauth"]);
        header("Location: login.auth.php");
        die();
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
<title><?=$page_title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
<style>
    *{
        font-weight: 400;
    }

    a{
        text-decoration: none;
    }

    .bg-font{
    font-family: 'Titillium Web', sans-serif;
     }

     input[type=submit]{
    font-weight: 900;
     }

 </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-lg p-4">
  <div class="container-fluid">
    <a class="navbar-brand bg-font" href="index.php">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="stats.php">Stats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages.php">Pages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="settings.php">Settings</a>
        </li>
      </ul>
      
      <div class="d-flex">
        <a href="?logout=1"><div class="btn btn-warning">Logout <i class="fa-duotone fa-arrow-right-from-bracket"></i></div></a>
      </div>
    </div>
  </div>
</nav>
<div class=" p-5 bg-primary">
<h1 class="bg-font text-light"><?=$page_title?></h1>
</div>
</header>

