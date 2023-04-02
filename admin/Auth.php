<?php
session_start();
if(!isset($_SESSION["adminauth"])){
header("Location: login.auth.php");
die();
}

?>