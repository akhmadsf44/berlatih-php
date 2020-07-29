<?php
function pasangan_terbesar($angka){
    // kode di sini
    $angka_terbesar = substr($angka,0,2);
    for ($i=0; $i<=strlen($angka)-2; $i++) {
        $pasangan_angka = substr($angka,$i,2);
        if ($pasangan_angka>$angka_terbesar) {
            $angka_terbesar=$pasangan_angka;
        }
    }
    return $angka_terbesar;
}

// TEST CASES
echo "Pasangan Terbersar 641573: ".pasangan_terbesar(641573)."<br>"; // 73
echo "Pasangan Terbersar 12783456: ".pasangan_terbesar(12783456)."<br>"; // 83
echo "Pasangan Terbersar 910233: ".pasangan_terbesar(910233)."<br>"; // 91
echo "Pasangan Terbersar 71856421: ".pasangan_terbesar(71856421)."<br>"; // 85
echo "Pasangan Terbersar 79918293: ".pasangan_terbesar(79918293)."<br>"; // 99

?>