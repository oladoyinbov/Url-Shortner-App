<?php
if(!isset($_SESSION["adminauth"])){
header("Location: ../login.auth.php");
die();
}

?>