<!DOCTYPE html>
<html lang="en">
<head><title><?php echo __site_name__; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo __site_desc__; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo __home__?>/Component/main.css" rel="stylesheet">
<?php
if(isset($sitedetails["headercode"])){
echo PHP_EOL.$headercodes = base64_decode($sitedetails["headercode"]);
}else{
  echo $headercodes = "";
}

if(isset($sitedetails["g_analytics"])){
  echo PHP_EOL.$g_anal = base64_decode($sitedetails["g_analytics"]);
}else{
  echo "";
}

?>

</head>
<body>
 <div id="body">
  <noscript>
<h4 class="alert alert-danger">Your browser does not support JavaScript!</h4>
</noscript>

<?php require Views("header");  ?>
