<?php
require_once ("header.php");
?>

<?php
include "../urls.php";
$num_of_links = number_format(count($datas));
?>

<div class="container">

<div class="my-5 p-5 bg-light text-dark d-flex justify-content-between shadow-lg border border-danger">
<h4><i class="fa-duotone fa-chart-simple fa-2x"></i>
Google Analytics</h4>
<h4>
<a href="settings.php?view=g-analytics"><button class="btn btn-danger">Configure</button></a>
</h4>
</div>

<div class="my-5 p-5 bg-light text-dark d-flex justify-content-between shadow-lg border border-primary">
<h4><i class="fa-duotone fa-link fa-2x"></i>
Link Shortened</h4>
<h4><?=$num_of_links?> Links</h4>
</div>


<div class="my-5 p-5 bg-light text-dark d-flex justify-content-between shadow-lg border border-danger">
<h4><i class="fa-duotone fa-file-lines fa-2x"></i>
Pages</h4>
<h4>
<a href="pages.php?list=allpages"><button class="btn btn-danger">See All</button></a>
</h4>
</div>



</div>