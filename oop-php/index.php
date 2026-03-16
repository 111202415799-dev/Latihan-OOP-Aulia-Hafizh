<?php
    include "Mahasiswa.php";

    echo "Data Mahasiswa : ";
    echo "<br>";


    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
    $mahasiswaTI->tampilkanData();

    $mahasiswaTI= new Mahasiswa();
    $mahasiswaTI->setData('A11.2000.00002', 'Junior', 'Teknik Informatika');
    $mahasiswaTI->tampilkanData();