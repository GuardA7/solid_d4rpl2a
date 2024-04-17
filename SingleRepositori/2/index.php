<?php
include("Mahasiswa.php");
include("ViewMahasiswa.php");


$mahasiswa = new Mahasiswa("2205005", "anjas");


$view = new ViewMahasiswa();

$view->showMahasiswa($mahasiswa);
?>
