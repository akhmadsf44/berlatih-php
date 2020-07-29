<?php
function tentukan_deret_aritmatika($arr) {
    // kode di sini
    if (sizeof($arr)<=1) {
        return True;
    }
    $beda = $arr[1]-$arr[0];
    for ($i=1; $i<sizeof($arr); $i++) {
        if (($arr[$i]-($arr[$i-1])) !=$beda) {
            return "false<br>";
        }
    }
    return "true<br>";
}

// TEST CASES
echo "Deret Aritmatika 1, 2, 3, 4, 5, 6 : ".tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "Deret Aritmatika 2, 4, 6, 12, 24 : ".tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "Deret Aritmatika 2, 4, 6, 8 : ".tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "Deret Aritmatika 2, 6, 18, 54 : ".tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "Deret Aritmatika 1, 2, 3, 4, 7, 9 : ".tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>