<?php
include ("KendaraanLIstrik.php");

class Mobil extends KendaraanLIstrik {
    public function menggunakanBatrei(): void {
        echo "Mobil menggunakan bahan bakar Listrik.\n";
    }
}

?>