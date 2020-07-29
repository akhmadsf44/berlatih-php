<?php

function cari_mean($arr){
    //kode di sini
    echo "Data : ";
    while(list($indeks,$nilai)=each($arr)){
        echo "$nilai ";
    }
    $jumlah=array_sum($arr); 
    $hasil=$jumlah/count($arr);    
    echo "<br>Rata-rata nya = ".round($hasil)."<br><br>";
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>