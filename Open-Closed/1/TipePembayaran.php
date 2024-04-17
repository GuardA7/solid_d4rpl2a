<?php

// Abstract class untuk tipe pembayaran
abstract class TipePembayaran {
    abstract public function memprosesPembayaran(): void;
}
?>
