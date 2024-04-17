<?php
include ("DBMS.php");

class MangoDB extends DBMS {
    public function createConnection(): void {
        echo "Koneksi MangoDB berhasil dibuat.\n";
    }
}

?>