<?php
declare(strict_types=1);

if(round((int)phpversion()) < 7){
    die("<h3>You Need A Minimum Of PHP 7.0 To Run This Application !!!!</h3>");
    return;
    }


require_once("head.php");


if(isset($_GET["action"]) && $_GET["to"] && $_GET["action"] == "success" && $_GET["status"] == "200"){
     $site = base64_decode($_GET["to"]);
    echo ('
     <div class="p-5 bg-success pb-5"><h2>
    <div class="d-flex justify-content-center"><i class="fa fa-duotone fa-check-circle fa-bounce fa-3x"></i></div> <div class="d-flex justify-content-center">INSTALLATION SUCCESSFUL.</div></h2>
     
    <div class="alert alert-warning m-3"><i class="fa-duotone fa-circle-exclamation"></i> Before You Continue, Delete <code>install.lock</code> file - (if available) and <code>Install/</code> Folder in script main directory. </div>
<div class="popdiv">
<div class="d-flex justify-content-center text-white"><i class="fa-duotone fa-arrow-down fa-2x"></i></div>
<div class="alert alert-info m-3"><p><b>WHY THIS?</b>: it is to Enable the script to function properly.</p></div>
</div>
    <div class="d-flex justify-content-center mt-5"><a href="'.$site.'"><button class="btn btn-primary text-white m-2"><i class="fa-solid fa-browser"></i> PROCEED TO SITE</button></a> <a href="'.$site.'/admin"><button class="btn btn-primary m-2 text-white"><i class="fa fa-dashboard"></i> GO TO ADMIN DASHBOARD</button></a></div>
    </div>

     ');


    return 0;
}

if(isset($_GET["step"]) && $_GET["step"] == 2){

echo'
<div class="my-5 p-5 bg-dark text-light">
<form action="Process.php" method="POST">
<h3>Admin Details</h3><hr>
<label for="username" class="form-label">Username:</label>
<input type="text" name="username" placeholder="Enter Username" class="form-control" required>

<label for="password" class="form-label">Password:</label>
<input type="password" name="password" placeholder="Enter Password" minlength="8" class="form-control" required><br>

<h3>Website Details</h3><hr>

<label for="sitename" class="form-label">Website Name:</label>
<input type="text" placeholder="Enter Website Name" name="sitename" class="form-control"> 

<label for="siteurl" class="form-label">Site Url:</label>
<input type="text" name="siteurl" placeholder="https://www.site.com" class="form-control" required>
<small><i class="text-danger">*input url in this format: (https://website.com) or (https://subdomain.website.com)</i></small><br>
<div class="m-4">
    <input type="submit" value="Next Step >>" class="btn btn-warning float-end">
    </div>
</form>
</div>
';

    return;
}






?>


<div class="p-5 my-5 bg-dark text-white">
<h1>Installation</h1><hr>

<h5>Requirements</h5><hr>
<ul>
<li>Apache server</li>
<li>mode_rewrite enabled</li>
<li>Intl PHP extension</li>
<li>Mbstring PHP extension</li>
<li>XML PHP extension</li>
<li>JSON PHP extension</li>
<li>cURL Extension</li>
<li>OpenSSL PHP Extension</li>
<li>PHP 7.x - 8.x.</li>
</ul>

<a href="?step=2" class="m-3"><div class="btn btn-warning btn-lg btn-block float-end">Proceed <i class="fa-regular fa-angles-right"></i></div></a>

</div>


<?php
require_once("foot.php");

?>