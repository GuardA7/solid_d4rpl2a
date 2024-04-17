<?php
include_once("Mobil.php");
include_once("MobilListrik.php");

$mobil = new Mobil();
$mobilListrik = new MobilListrik();

echo "Mobil dengan bahan bakar BBM:\n";
$mobil->menggunakanBBM();

echo "\n";

echo "Mobil dengan bahan bakar listrik:\n";
$mobilListrik->menggunakanBatrei();
?>
