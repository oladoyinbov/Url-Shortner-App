<?php
session_start();
if(isset($_SESSION["adminauth"])){
    header("Location: index.php");
    }

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["submit"]) && !empty($_POST["username"])){


include "function.php";
include "main.config.php";

$username = sanitize_input($_POST["username"]);
$password = trim($_POST["password"]);

$b_user = base64_decode($sitedetails["username"]);

if($username == $b_user){

if(password_verify($password, $sitedetails["password"])){

    $_SESSION["adminauth"] = $username;

    header("Location: index.php");

}else{
    $error = "Invalid Login!";
}

}else{
    $error = "Invalid Login!";
}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<title>Login</title>
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
 .bg-font{
font-family: 'Titillium Web', sans-serif;
}

input[type=submit]{
    font-weight: 900;
}


 </style>
</head>
<body class="bg-dark text-white">


<div class="container shadow-lg bg-secondary mt-5 p-5 rounded">
    <h1 class="d-flex justify-content-center bg-font shadow-sm adtext">ADMIN PANEL</h1><br/>
    <?php if(!empty($error)): ?> <div class="alert alert-danger"><i class="fa-solid fa-shield-exclamation fa-duotone fa-1x"></i> <?=$error?></div><?php endif; ?>
<form action="<?php htmlentities($_SERVER["PHP_SELF"]); ?>" method="POST">
<label for="username" class="form-label">Username:</label>
<input type="text" name="username" placeholder="Enter Username" class="form-control" required/>

<label for="password" class="form-label">Password:</label>
<input type="password" name="password" placeholder="Enter Password" class="form-control" required/><br>

<input type="submit" value="Login" name="submit" class="btn btn-primary btn-block">

</form>
</div>

</body>
</html>