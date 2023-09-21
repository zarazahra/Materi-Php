<?php

hargaKerudung(4000, 5000, 5000, 10000, 1000);

function hargaKerudung($pasmina, $segitiga, $instan, $bergo, $geblus){
    $totalHarga = ($pasmina + $segitiga + $instan + $bergo + $geblus);
    echo $totalHarga;
}


// Kalau bikin nama function dulu 

namaKita();
function namaKita(){
    echo "Haloo nama saya Rayhana";
    echo "<hr>";
    echo "Iyaa";
}

// Bikin fuction baru panggil

function namaKitaa(){
    echo "<hr>";
    echo "Haloo nama saya Rayhana";
    echo "<hr>";
    echo "Iyaa";
}

namaKitaa();
?>