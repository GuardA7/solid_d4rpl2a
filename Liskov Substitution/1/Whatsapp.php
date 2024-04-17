<?php

include_once("VideoGroupManager.php");

class WhatsApp extends VideoGroupManager {
    public function chat(): void {
        echo "Chatting on WhatsApp...\n";
    }

    public function sendPhotoAndVideo(): void {
        echo "Sending photo and video on WhatsApp...\n";
    }

    public function callGroupVideo(): void {
        echo "Calling group video on WhatsApp...\n";
    }
}
?>
