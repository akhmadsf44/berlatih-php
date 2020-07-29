<?php
function palindrome($str) {
    $output = false;
    if (strrev($str)==$str) {
        $output = true;
    }
    return $output;
}
function palindrome_angka($angka) {
  // tulis kode di sini
  if ($angka >= 1 && $angka <= 9) {
      return $angka++;
  }
  if (palindrome($angka)) {
      $angka++;
  }
  while (palindrome($angka)==false) {
      $angka++;
  }
  return $angka;
}

// TEST CASES
echo "Angka 9: ".palindrome_angka(9)."<br>"; // 9
echo "Angka 10: ".palindrome_angka(10)."<br>"; // 11
echo "Angka 117: ".palindrome_angka(117)."<br>"; // 121
echo "Angka 175: ".palindrome_angka(175)."<br>"; // 181
echo "Angka 1000: ".palindrome_angka(1000); // 1001

?>