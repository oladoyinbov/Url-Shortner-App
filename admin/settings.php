<?php
require "header.php";
include_once("function.php");
include("main.config.php");
include("config/site.config.php");
include("config/contact.config.php");
include("config/g-analytics.config.php");
include("config/hfcodes.config.php");
include("config/ads.config.php");


if(isset($_GET["view"]) == "site" && $_GET["view"] == "site"){


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_to"])){
  
// Input Values 
$sitedesc = $_POST["sitedesc"];
$siteform_value = $_POST["siteform_value"];
$siteform_button = $_POST["siteform_button"];
$homepage_no_history = $_POST["homepage_no_history_text"];
$footer_text = $_POST["footer_text"];
$site_mail = $_POST["site_mail"];
$homepage_desc = base64_encode($_POST["homepage_desc"]);

//Array Customized Input Values
$sitedesc_format = '$sitedetails["sitedesc"] = "'.$sitedesc.'";';
$siteform_vf = '$sitedetails["siteform_value"] = "'.$siteform_value.'";';
$siteform_bf = '$sitedetails["siteform_button"] = "'.$siteform_button.'";';
$homepage_no_hf = '$sitedetails["homepage_no_history"] = "'.$homepage_no_history.'";';
$homepage_desc_hf = '$sitedetails["homepage_desc"] = "'.$homepage_desc.'";';
$footer_tf = '$sitedetails["footer_text"] = "'.$footer_text.'";';
$site_mailv = '$sitedetails["site_mail"] = "'.$site_mail.'";';

//Open "site.config.php" File And Write Settings Input Value Into It
$openfile = fopen("config/site.config.php", "w");
if(fwrite($openfile, "<?php".PHP_EOL.$sitedesc_format.PHP_EOL.$siteform_vf.PHP_EOL.$siteform_bf.PHP_EOL.$homepage_no_hf.PHP_EOL.$footer_tf.PHP_EOL.$site_mailv.PHP_EOL.$homepage_desc_hf)){
  echo '<div class="alert alert-success m-4"><i class="fa-duotone fa-square-check fa-bounce"></i> Update Successfull</div>';
  ;
  
  Redirect("settings.php?view=site");

}else{
  echo '<div class="alert alert-danger m-4"><i class="fa-solid fa-face-sad-tear fa-bounce"></i> Error Occurred!</div>';
}
fclose($openfile);


  }


  //Settings Default Values
  if(isset($sitedetails["sitedesc"])){
    $sitedesc = $sitedetails["sitedesc"];
    }else{
        $sitedesc = "Short Urls Made Easy";
    }

    if(isset($sitedetails["homepage_desc"])){
      $homepage_desc = base64_decode($sitedetails["homepage_desc"]);
      }else{
          $homepage_desc = '<h4 class="bg-font">Generate Shorten URLs For Free</h4> <br> No Hidden Cost. <br> No Premium Plan. <br> No Ads <i class="fa fa-smile"></i> <br> Generate Short Url in a Sec. <br> It`s 100% Free..';
      }


if(isset($sitedetails["siteform_value"])){
        $searchform_value = $sitedetails["siteform_value"];
        }else{
            $searchform_value = "Paste Url, Let's Shorten It...";
        }


        
if(isset($sitedetails["siteform_button"])){
            $searchform_button = $sitedetails["siteform_button"];
            }else{
                $searchform_button = "SHORTEN...";
            }


if(isset($sitedetails["footer_text"])){
                $footer_text = $sitedetails["footer_text"];
                }else{
                    $footer_text = "Created By Oladoyinbo Vincent";
                }


if(isset($sitedetails["homepage_no_history"])){
                    $homepage_no_history_text = $sitedetails["homepage_no_history"];
                    }else{
                        $homepage_no_history_text = "Short Urls Makes Live Easier..";
                    }


if(isset($sitedetails["site_mail"])){
                        $site_mail = $sitedetails["site_mail"];
                        }else{
                            $site_mail = "support@digitalpoint.com.ng";
                        }

  

  echo '
  <div class="container mt-4 mb-5">
  <form action="?view=site" method="POST">
  <label for="name">Site Name (<i><small class="text-danger">Cannot Be Changed</small></i>):</label>
<input type="text" value="'.$sitedetails["sitename"].'" class="form-control" disabled><br>
<label for="name">Site Url (<i><small class="text-danger">Cannot Be Changed</small></i>):</label>
<input type="text" value="'.$sitedetails["siteurl"].'" class="form-control" disabled><br>

<label for="name">Site Meta Description:</label>
<input type="text" value="'.$sitedesc.'" class="form-control" name="sitedesc"><br>

<label for="name">Homepage Site Description (<b class="text-success">HTML Allowed</b>):</label>
<textarea rows="7" class="form-control" name="homepage_desc">'.$homepage_desc.'</textarea><br>

<label for="email">Site E-mail:</label>
<input type="email" name="site_mail" value="'.$site_mail.'" class="form-control">

<label for="name">Homepage Search Placeholder Text:</label>
<input type="text" value="'.$searchform_value.'" class="form-control" name="siteform_value"><br>

<label for="name">Homepage Search Button Text:</label>
<input type="text" value="'.$searchform_button.'" class="form-control" name="siteform_button"><br>

<label for="name">User No History Text:</label>
<input type="text" value="'.$homepage_no_history_text.'" class="form-control" name="homepage_no_history_text"/><br>

<label for="name">Footer Copyright Text:</label>
<input type="text" value="'.$footer_text.'" class="form-control" name="footer_text"><br>


<input type="submit" name="submit_to" class="btn btn-warning text-dark" value="Update Info">
  </form>
  </div>
  ';



  return;
}









if(isset($_GET["view"]) == "contact" && $_GET["view"] == "contact"){

if($_SERVER["REQUEST_METHOD"] == "POST" && $_GET["view"] == "contact" && isset($_POST["submit_too"])){
$phone = $_POST["phone"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$instagram = $_POST["instagram"];
$snapchat = $_POST["snapchat"];

$sphone = '$sitedetails["phone"] = "'.$phone.'";';
$sfacebook = '$sitedetails["facebook"] = "'.$facebook.'";';
$stwitter = '$sitedetails["twitter"] = "'.$twitter.'";';
$sinstagram = '$sitedetails["instagram"] = "'.$instagram.'";';
$ssnapchat = '$sitedetails["snapchat"] = "'.$snapchat.'";';

$openfile = fopen("config/contact.config.php", "w");
if(fwrite($openfile, "<?php".PHP_EOL.$sphone.PHP_EOL.$sfacebook.PHP_EOL.$stwitter.PHP_EOL.$sinstagram.PHP_EOL.$ssnapchat)){
  echo '<div class="alert alert-success m-4"><i class="fa-duotone fa-square-check fa-bounce"></i> Update Successfull</div>';
  ;

  Redirect("settings.php?view=contact");

}else{
  echo '<div class="alert alert-danger m-4"><i class="fa-solid fa-face-sad-tear fa-bounce"></i> Error Occurred!</div>';
}
fclose($openfile);

}






//input default value



if(isset($sitedetails["phone"])){
  $phone = $sitedetails["phone"];
  }else{
      $phone = "+2339048334383";
  }

  if(isset($sitedetails["facebook"])){
    $facebook = $sitedetails["facebook"];
    }else{
        $facebook = "https://facebook.com/digitalpointafrica";
    }

    if(isset($sitedetails["instagram"])){
      $instagram = $sitedetails["instagram"];
      }else{
          $instagram = "https://instagram.com/digitalpointafrica";
      }

      if(isset($sitedetails["snapchat"])){
        $snapchat = $sitedetails["snapchat"];
        }else{
            $snapchat = "https://snapchat.com/digitalpointafrica";
        }

        if(isset($sitedetails["twitter"])){
          $twitter = $sitedetails["twitter"];
          }else{
              $twitter = "https://twitter.com/digitalpointafrica";
          }
      
    
  


  echo '
  <div class="container mt-4 mb-5">
  <form action="?view=contact" method="POST">
  
<label for="phone">Phone:</label>
<input type="phone" value="'.$phone.'" class="form-control" name="phone"/><br>

<label for="social">Facebook:</label>
<input type="text" value="'.$facebook.'" class="form-control" name="facebook"/><br>

<label for="social">Twitter:</label>
<input type="text" value="'.$twitter.'" class="form-control" name="twitter"/><br>

<label for="social">Instagram:</label>
<input type="text" value="'.$instagram.'" class="form-control" name="instagram"/><br>

<label for="social">Snapchat:</label>
<input type="text" value="'.$snapchat.'" class="form-control" name="snapchat"/><br>

<input type="submit" name="submit_too" class="btn btn-warning text-dark" value="Update Info"/>
  </form>
  </div>';

  return;
}




if(isset($_GET["view"]) && $_GET["view"] == "g-analytics"){


  if($_SERVER["REQUEST_METHOD"] == "POST" && $_GET["view"] == "g-analytics" && isset($_GET["view"]) && isset($_POST["submit_a"])){
    try{
     $g_analytics = $_POST["g_analytics"];
     $g_analytics = base64_encode($g_analytics);
     $g_format = '$sitedetails["g_analytics"] = "'.$g_analytics.'";';


 
      $openfile = fopen("config/g-analytics.config.php", "w");
      
     if(fwrite($openfile, "<?php".PHP_EOL.$g_format)){
      echo '<div class="alert alert-success m-4"><i class="fa-duotone fa-square-check fa-bounce"></i> Update Successfull</div>';
     
      Redirect("settings.php?view=g-analytics");

    }else{
      throw new Exception("Error Occurred");
      };

     fclose($openfile);

    }catch(Exception $e){
     echo '<div class="alert alert-danger m-4"><i class="fa-solid fa-face-sad-tear"></i> '.$e->getMessage().' on Line '.$e->getLine().' in '.$e->getFile().'</div>';
     
    }

  }


  if(isset($sitedetails["g_analytics"])){
    $gac = base64_decode($sitedetails["g_analytics"]);
    }else{
        $gac = "";
    }


  echo'
  <div class="container mt-5 mb-5">
  
<form action="?view=g-analytics" method="POST">
<label for="text" class="form-label">Google Analytics Code:</label><br>
<textarea rows="5" name="g_analytics" class="form-control">'.$gac.'</textarea><br/>
<input type="submit" name="submit_a" class="btn btn-warning text-dark" value="Update Info"/>
</form>
</div>
  ';

return;
}



if(isset($_GET["view"]) && $_GET["view"] == "headercode"){

  if($_SERVER["REQUEST_METHOD"] == "POST" && $_GET["view"] == "headercode" && isset($_GET["view"]) && isset($_POST["submit_h"])){

    $head = $_POST["headercode"];
    $foot = $_POST["footercode"];
    $head = base64_encode($head);
    $foot = base64_encode($foot);

    $header = '$sitedetails["headercode"] = "'.$head.'";';
    $footer = '$sitedetails["footercode"] = "'.$foot.'";';


    $openfile = fopen("config/hfcodes.config.php", "w");
    if(fwrite($openfile, "<?php".PHP_EOL.$header.PHP_EOL.$footer)){
      echo '<div class="alert alert-success m-4"><i class="fa-duotone fa-square-check fa-bounce"></i> Update Successfull</div>';
      ;

      Redirect("settings.php?view=headercode");
    }else{
      echo '<div class="alert alert-danger m-4"><i class="fa-solid fa-face-sad-tear fa-bounce"></i> Error Occurred!</div>';
     
    };
    fclose($openfile);

 }


 if(isset($sitedetails["headercode"])){
  $hdc = base64_decode($sitedetails["headercode"]);
  }else{
      $hdc = "";
  }

  if(isset($sitedetails["footercode"])){
    $fdc = base64_decode($sitedetails["footercode"]);
    }else{
        $fdc = "";
    }


 echo'
 <div class="container mt-5 mb-5">
 
<form action="?view=headercode" method="POST">
<label for="text" class="form-label">Header Codes:</label><br>
<textarea rows="5" name="headercode" class="form-control">'.$hdc.'</textarea><br/>

<label for="text" class="form-label">Footer Codes:</label><br>
<textarea rows="5" name="footercode" class="form-control">'.$fdc.'</textarea><br/>

<input type="submit" name="submit_h" class="btn btn-warning text-dark" value="Update Info"/>
</form>
</div>
 ';

  
return;
}




if(isset($_GET["view"]) && $_GET["view"] == "ads"){

  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_ads"]) && $_GET["view"] == "ads"){

       $small = base64_encode($_POST["small"]);

       $new_small = '$ads["small"] = "'.$small.'";';

       $openfile = fopen("config/ads.config.php", "w");
       if(fwrite($openfile, "<?php".PHP_EOL.'$ads = array();'.PHP_EOL.$new_small)){
        echo '<div class="alert alert-success m-4"><i class="fa-duotone fa-square-check fa-bounce"></i> Update Successfull</div>';
       Redirect("settings.php?view=ads");
      }else{
        echo '<div class="alert alert-danger m-4"><i class="fa-duotone fa-cancel fa-bounce"></i> Error Occured</div>';
     
       }
       fclose($openfile);
  }

  //Check If Ads Array Exists
   if(isset($ads["small"])){
  $ads_value = base64_decode($ads["small"]);
      }else{
        $ads_value = "";
      }

echo'
<div class="container mt-5 mb-3">
<form action="?view=ads" method="POST">
<label class="form-label">( 728*90 ) or ( 468*60 ) Banner:</label>
<textarea class="form-control" rows="6" name="small">'.$ads_value.'</textarea><br>

<input type="submit" class="btn btn-success" value="Save Settings" name="submit_ads">
</form>
</div>
';

return;
}


?>


<div class="container mt-5">
  <div class="row g-2">
    <div class="col-6">
    <a href="?view=ads"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-rectangle-ad"></i> Advertisements</b></div></a>
    </div>
    <div class="col-6">
    <a href="?view=g-analytics"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-chart-simple"></i> Google Analytics</b></div></a>
    </div>
    <div class="col-6">
    <a href="?view=headercode"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-code"></i> Header/Footer Code</b></div></a>
    </div>
    <div class="col-6">
    <a href="?view=contact"><div class="p-3 border bg-light shadow-sm"><b><i class="fa-duotone fa-hashtag"></i> Contact/Social Links</b></div></a>
    </div>
    <div class="col-12">
      <a href="?view=site"><div class="p-3 border bg-light shadow-sm"><center><b><i class="fa-duotone fa-gears"></i> Site Settings</b></center></div></a>
    </div>
  </div>
</div>