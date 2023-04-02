<?php

 if(file_exists("install.lock")){
    echo '<h3 style="color:red;">Delete "INSTALL.LOCK" File in the main directory Before You Continue!!!!!</h3>';
    header("Location: install/index.php");
    return;
    }

if(file_exists("install/")){
    echo '<h3 style="color:red;">Delete Install Directory Before You Continue!!!!</h3>';
    
    }

      
include("admin/main.config.php");
include("admin/config/site.config.php");
include("admin/config/contact.config.php");
include("admin/config/g-analytics.config.php");
include("admin/config/hfcodes.config.php");
/*
 * Follow Me On Twitter - @wildfoster.
 *
 * (c) Oladoyinbo Vincent <support@digitalpoint.com.ng>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 // ################################################################################################


// *Replace 127.0.0.1/urlshort With Your Installation Domain



if(isset($sitedetails["siteurl"])){
$siteurl = $sitedetails["siteurl"];
}else{
    $siteurl = "http://127.0.0.1/urlshort";
}

if(isset($sitedetails["sitename"])){
    $sitename = $sitedetails["sitename"];
    }else{
        $sitename = "Url Shortener";
    }

if(isset($sitedetails["sitedesc"])){
    $sitedesc = $sitedetails["sitedesc"];
    }else{
        $sitedesc = "Short Urls Made Easy";
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
                            $site_mail = "oladoyinbov@gmail.com";
                        }
                    
// Mail Config
if(isset($sitedetails["mail_host"])){
    $mail_host = $sitedetails["mail_host"];
    }else{
        $mail_host = "smtp.localhost.com";
    }

if(isset($sitedetails["mail_user"])){
        $mail_user = $sitedetails["mail_user"];
        }else{
            $mail_user = "ujwxiwdiwkdkw";
        }

if(isset($sitedetails["mail_password"])){
            $mail_password = $sitedetails["mail_password"];
            }else{
                $mail_password = "JDxiwcxdiwkcedkwO";
            }


if(isset($sitedetails["mail_port"])){
                $mail_port = $sitedetails["mail_port"];
                }else{
                    $mail_port = 479;
                }





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

                        if(isset($sitedetails["homepage_desc"])){
                                $homepage_desc = base64_decode($sitedetails["homepage_desc"]);
                                }else{
                                    $homepage_desc = '<h4 class="bg-font">Generate Shorten URLs For Free</h4> <br> No Hidden Cost. <br> No Premium Plan. <br> No Ads <i class="fa fa-smile"></i> <br> Generate Short Url in a Sec. <br> It`s 100% Free..';
                                }
                        


//Site Url
define("__home__", $siteurl);


// Site Name And Description 
define("__site_name__", $sitename);
define("__site_desc__", $sitedesc);
define("__homepage_desc__", $homepage_desc);


// Customize Form Data 
define("__search_form_value__", $searchform_value);
define("__search_form_button__", $searchform_button);

// Customize Footer Text
define("__footer_text__", $footer_text);

// Display Text When User Doesn't Have Any Url History 
define("__homepage_no_history_text____", $homepage_no_history_text);


// EMAIL CONFIG
define("__site_mail__", $site_mail);
define("__mail_host__", $mail_host);
define("__mail_user__", $mail_user);
define("__mail_password__", $mail_password);
define("__mail_port__", $mail_port);


//########## CONTACTS LINKS CONFIG ###########

define("__facebook__", $facebook);

define("__twitter__", $twitter);

define("__instagram__", $instagram);

define("__snapchat__", $snapchat);

define("__phone__", $phone);


?>