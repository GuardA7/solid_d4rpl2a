<?php
interface FiturScan {
    public function scanKertas(): void;
}

class PrinterFlagship implements FiturFax, FiturCetak, FiturScan {
    public function cetakKertas(): void {
        echo "Mencetak kertas...\n";
    }

    public function terimaFax(): void {
        echo "Menerima fax...\n";
    }

    public function scanKertas(): void {
        echo "Menggunakan fitur scan untuk kertas...\n";
    }
}
?>