<?php
include ('Persegi.php');
include ("PenghitungPersegi.php");
$persegi = new Persegi(5); 
$penghitung = new PenghitungPersegi(); 
$luas = $penghitung->hitungLuas($persegi);
echo "Luas Persegi dengan sisi " . $persegi->getSisi() . " adalah: " . $luas;
?>