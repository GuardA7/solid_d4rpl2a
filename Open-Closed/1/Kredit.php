<?php
include ("TipePembayaran.php");


class Kredit extends TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan metode Kredit berhasil diproses.\n";
    }
}

?>