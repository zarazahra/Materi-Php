<?php

// Perulangan for
// Semuanya dimasukin kedalam for

// $angka = 1;
// $angkaMaks = 30;

// for($angka; $angka <=$angkaMaks; $angka++){
//     echo "Perulangan for ke - " . $angka;
//     echo "<br>";
// }


// Perulangan While 
// Meriksa dulu baru ngelakuin perulangan

// $angka = 1;

// while ($angka <= 40){
//     $angka = $angka + 1;
//     echo "Perulangan while ke - " . $angka;
//     echo "<br>";
// }

// while($angka <= 20){
//     echo "While ke- $angka";
//     $angka++;
//     echo "<br>";
// }

// while($angka <= 20) :
//     echo "While ke- $angka";
//     $angka++;
//     echo "<br>";
// endwhile;


// Perulangan do while
// Proses dulu baru ngecek

// $angka = 1;

// do{
//     echo "Do while ke - $angka";
//     echo "<br>";
//     $angka++;
// }while($angka <= 40);


// Foreach loop -> array

$makanan = array("Sate'", "Pempeq", "Syeblaq", "Syeker", "Baksyo");
$a = 0;

// foreach($makanan as $food){
//     echo $a+1 . " . " . $makanan[$a];
//     echo "<br>";
// }

foreach($makanan as $food){
    echo $a++ . " . " . $food;
    echo "<br>";
}


// Break / Continue
//

$a = 0;

for($a; $a<=30; $a++){
    if($a == 10){
        continue;
    }

    echo "Loop Break ke - " . $a;
    echo "<br>";
}
?>