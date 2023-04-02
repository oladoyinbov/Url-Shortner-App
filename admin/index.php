<?php
require "header.php";

if(file_exists("../install.lock")){
  return;
  }

  
?>


<div class="container mt-5">
  <div class="row g-2">
    <div class="col-6">
    <a href="stats.php"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-chart-simple"></i> Statistics</b></div></a>
    </div>
    <div class="col-6">
    <a href="pages.php"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-page"></i> Pages</b></div></a>
    </div>
    <div class="col-6">
    <a href="settings.php"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-gears"></i> Settings</b></div></a>
    </div>
    <div class="col-6">
      <a href="?logout=1"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-right-to-bracket"></i> Logout</b></div></a>
    </div>
  </div>
</div>