<?php
include_once("KendaraanListrik.php");

class MobilListrik extends KendaraanListrik {
    public function menggunakanBatrei(): void {
        echo "Mobil menggunakan bahan bakar Listrik.\n";
    }
}
?>
