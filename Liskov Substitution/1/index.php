<?php
// Include the class files
include_once("Instagram.php");
include_once("WhatsApp.php");

// Create objects
$instagram = new Instagram();
$whatsapp = new WhatsApp();

// Demonstrate Instagram functionalities
echo "Demonstrating Instagram functionalities:\n";
$instagram->chat();
$instagram->sendPhotoAndVideo();
$instagram->publishPost();

echo "\n";

// Demonstrate WhatsApp functionalities
echo "Demonstrating WhatsApp functionalities:\n";
$whatsapp->chat();
$whatsapp->sendPhotoAndVideo();
$whatsapp->callGroupVideo();
?>
