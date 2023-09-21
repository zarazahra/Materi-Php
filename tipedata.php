<?php

// String 
// var_dump ngasih tau tipe datanya dan jumlahnya huruf/karakternya

// $dataString = "Sate";
// echo "Makanan kesukaan saya adalah $dataString";
// echo "<br>";
// print $dataString;
// echo "<br>";
// var_dump ($dataString);
// echo "<br>";
// print_r ($dataString);


// Number
// Float(yg ada titikny) sama Number itu sama

// $dataNumber = 200.999;
// echo "Makanan kesukaan saya adalah $dataNumber";
// echo "<br>";
// print $dataNumber;
// echo "<br>";
// var_dump ($dataNumber);
// echo "<br>";
// print_r ($dataNumber);


// Boolean
// Klo manggil pake variabel maka 1 = true dan false = 0

// $dataBoolean = true;

// if($dataBoolean){
//     echo "Hasilnya $dataBoolean";
// }else{
//     echo "Hasilnya false";
// }


// Null 

// $dataNull = null;
// $dataNull2 = 60;

// // print "Ini datanya $dataNull2";

// // Pengecekan data null
// $cekNull = is_null($dataNull);
// // echo $cekNull;
// var_dump($cekNull);


// Array 

// $bias = array("Jk", "Jay", "Kiming", "Peceye");
// print "Bias saya $bias[1]";
// echo "<br>";
// echo $bias[0];
// echo "<br>";
// // array(berapa data { [index] tipedata(jumlahnya) isi datanya})
// var_dump ($bias);

// Operasi Array 

// Mengubah data -> rumusnya $variabel[index] = "Value"
// $bias[1] = "Beomgyu";
// echo $bias[1];
// echo "<br>";
// echo "Bias diurutannya adalah " . $bias[2] = "Jihoo"

// Menambahkan data di paling belakang, rumusnya -> $variabel[] = "Value"
// echo $bias[] = "Guanlin";
// var_dump($bias);

// Hapus data pada array, rumusnya -> unset($variabel[index]) 
// unset($bias[2]);
// var_dump($bias);

// Menghitung data di array 
// echo count($bias);

// Mapping Array, cara aksesnya -> panggil bungkus paling luar atau variabel baru ["key"],kyk data objek
$nama = array (
    "depan" => "Alya",
    "tengah" => "baik",
    "belakang" => "dikit"
);
echo $nama["depan"];

// Mapping array dalam array 
$nama = array (
    "depan" => "Alya",
    "tengah" => "baik",
    "belakang" => "dikit",
    "alamat" => array(
        "kota" => "Pasaman",
        "negara" => "Indonesia"
    )
);

echo $nama ["depan"] . " " . $nama["alamat"]["kota"];
?>