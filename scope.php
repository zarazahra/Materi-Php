<?php

// Variabel Lokal hanya bisa diakses dalam kurung function
// varLokal();

// function varLokal(){
//     $lokal = "Bisa diakses";
//     print "Variabel $lokal di dalam";
// }

// varLokal();
//     print "Variabel $lokal di luar";


// Variabel Publik
// Variabel bisa di akses diluar publik
varPublik();
$publik = 1000;

// dibawah ini jd lokal yaa
function varPublik(){
    $publik = 3000;
    print "Permen harganya $publik";
    echo "<br>";
}
// publik ini okee
echo "Jelly harganya $publik";

?>