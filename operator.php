<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Hasil Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";

echo "<br>";

echo "Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama Dengan: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama Dengan: {$hasilLebihBesarSama} <br>";

echo "<br>";

echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil NotA: {$hasilNotA} <br>";
echo "Hasil NotB: {$hasilNotB} <br>";

echo "<br>";

$a += $b;
echo "Setelah += : $a <br>";
$a -= $b;
echo "Setelah -= : $a <br>";
$a *= $b;
echo "Setelah *= : $a <br>";
$a /= $b;
echo "Setelah /= : $a <br>";
$a %= $b;
echo "Setelah %= : $a <br>";

echo "<br>";

echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";

echo "<br>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: {$totalKursi} <br>";
echo "Kursi terisi: {$kursiTerisi} <br>";
echo "Kursi kosong: {$kursiKosong} <br>";
echo "Persentase kursi kosong: " . round($persentaseKosong, 2) . "% <br>";
?>