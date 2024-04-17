<?php
// Instagram.php
include_once("PostMediaManager.php");

class Instagram extends PostMediaManager {
    public function chat(): void {
        echo "Chatting on Instagram...\n";
    }

    public function sendPhotoAndVideo(): void {
        echo "Sending photo and video on Instagram...\n";
    }

    public function publishPost(): void {
        echo "Publishing post on Instagram...\n";
    }
}
?>
