<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sitename"]) && isset($_POST["siteurl"]) && isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && strlen($_POST["password"]) >= 8 && !empty($_POST["siteurl"])){
   
    $sitename = $_POST["sitename"];
    $siteurl = trim($_POST["siteurl"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $salt = '$6$rounds=5000$mynameisoladoyinbovincentforsalt$';
    $password = crypt($password, $salt);

    $begin = "<?php  
    \$sitedetails = array();
    ";
    $name = '$sitedetails["sitename"] = "'.$sitename.'";';
    $url = '$sitedetails["siteurl"] = "'.$siteurl.'";';
    $u_name = '$sitedetails["username"] = "'.base64_encode($username).'";';
    $u_password = '$sitedetails["password"] = \''.$password.'\';';
    $s_stats = '$sitedetails["stats"] = "1";';
    $p_pages = '$sitedetails["pages"] = "contact|privacy-policy";';



    $config_file = fopen("../admin/main.config.php", "w");

    if(fwrite($config_file, $begin.PHP_EOL.$name.PHP_EOL.$url.PHP_EOL.$u_name.PHP_EOL.$u_password.PHP_EOL.$s_stats.PHP_EOL.$p_pages)){
        echo '<div class="alert alert-success m-4"><i class="fa-duotone fa-square-check fa-bounce"></i> <h3>Installation Successfull</h3></div><br>';
          $encode_url = base64_encode($siteurl);
        header("Location: index.php?action=success&status=200&to=".$encode_url."");
    if(file_exists("../install.lock")){
     unlink("../install.lock");
    }
    }else{
    die("An Error Occured");
    }

    fclose($config_file);

    return;


    }else{

    header("Location: index.php");

}



?>