<?php
$name = "John";
if ($name == "John") {
  echo "Hello John!";
} else{ 
 echo "Hello Ashin!";
} 
echo "<br>";

$is_admin = true;
//$is_admin = null;
if ($is_admin)
echo "Welcome, admin!";

echo "<br>";

$can_edit = false;
$is_admin = true;

if ( $is_admin) { 
  echo "Welcome, admin!";
  $can_edit = true;
}

echo "br>";
$page = "home";


if ($page == "about") {
  header ("Location: home_page.php");
}else{ 
   header("loction: about_pagr.php");
}

?>