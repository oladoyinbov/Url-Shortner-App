<?php

function sanitize_input($value){
$value = trim($value);
$value = filter_var($value, FILTER_SANITIZE_STRING);
$value = strip_tags($value);
$value = htmlentities($value);
$value = htmlspecialchars($value);
return $value;
}


function Redirect(string $location, int $timer = 2000){
    echo'
    <script>
    
    setTimeout("Redir()", '.$timer.');

    function Redir(){
     window.location = "'.$location.'";
    }
    </script>
    ';
}

function Config($value){
    $first_ext = "config/";
$end_ext = ".config.php";
$endpoint = 'include "'.$first_ext.$value.$end_ext.'";';

return $endpoint;
}

?>