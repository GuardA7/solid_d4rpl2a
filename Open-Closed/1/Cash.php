<?php
include ("TipePembayaran.php");


class Cash extends TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan metode Cash berhasil diproses.\n";
    }
}

?>