<?php
require "header.php";

if(isset($_GET["list"]) == "allpages"){

$allpages = explode("|", $sitedetails["pages"]);

$f_contact = ucwords($allpages[0]);
$f_privacy = ucwords(implode(" ", explode("-", $allpages[1])));


echo '

<div class="container mt-5">
  <div class="row g-2">
    <div class="col-12">
    <div class="p-3 border bg-light shadow-sm"><b>'.$f_contact.'</b>  <a href="'.$sitedetails["siteurl"]."/pages/".$allpages[0].'" class="btn btn-primary float-end p-1"><i class="fa-duotone fa-eye"></i> View Page</a></div>
    </div>
    <div class="col-12">
    <div class="p-3 border bg-light shadow-sm"><b>'.$f_privacy.'</b>  <a href="'.$sitedetails["siteurl"]."/pages/".$allpages[1].'" class="btn btn-primary float-end p-1"><i class="fa-duotone fa-eye"></i> View Page</a></div>
    </div>
    
  </div>
</div>

';
return;
}





?>


<div class="container mt-5">
  <div class="row g-2">
    <div class="col-12">
    <a href="javascript:void(0)"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-solid fa-square-plus"></i> Create New (Coming Soon...)</b></div></a>
    </div>
    <div class="col-12">
    <a href="?list=allpages"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-eye"></i> View Existing Pages</b></div></a>
    </div>
    
  </div>
</div>