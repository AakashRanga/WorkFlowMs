<?php
session_start();

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
  $Protocol = "https://";
}else{
  $Protocol = "http://";
}

define("SITE_URL",$Protocol.$_SERVER['SERVER_NAME']); 
define("ROOT",$_SERVER['DOCUMENT_ROOT'].""); 
define("UPLOAD_PATH",$_SERVER['DOCUMENT_ROOT']."/uploads"); 
define("UPLOAD_URL",SITE_URL."/assets/uploads"); 

define("PROFILE_UPLOAD_PATH",$_SERVER['DOCUMENT_ROOT']."/assets/uploads/profiles"); 

define("PROFILE",UPLOAD_URL."/profiles/"); 
define("COURSES",UPLOAD_URL."/courses/"); 


$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "vmago";

// $servername = "localhost";
// $username   = "tunetutu_aakashranga";
// $password   = "Ldri~EZ{94D0";
// $db         = "tunetutu_vmago";

$conn =  mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>