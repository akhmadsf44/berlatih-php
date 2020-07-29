<?php

function papan_catur($angka) {
    // tulis kode di sini
    $baris = $angka;
    $kolom = 2*$baris;
    $x=1;
    while ($x <= $baris) {
        $y=1;
        while ($y <= $kolom) {
            if (($x+$y) %2 > 0)
            echo "#";
            else
            echo "&nbsp&nbsp";
            $y++;
        }
        echo "<br>";
        $x++;
    }
    echo "<br>";
}


// TEST CASES
echo "Papan Catur 4<br>";
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo "Papan Catur 8<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo "Papan Catur 5<br>";
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/