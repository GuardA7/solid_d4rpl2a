<?php
class Kubus implements Shape2Dimension, Shape3Dimension {
    public function calculateArea(): void {
        echo "Menghitung luas permukaan kubus...\n";
    }

    public function calculateVolume(): void {
        echo "Menghitung volume kubus...\n";
    }
}
?>