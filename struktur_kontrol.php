<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
echo "<br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";

$jumlahahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah $jumlahBuah";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

$nilaiTersaring = [];
for ($i = 2; $i < 8; $i++) {
    $nilaiTersaring[] = $nilaiSiswa[$i];
}

$totalNilai = 0;
$jumlah = 0;
foreach ($nilaiTersaring as $nilai) {
    $totalNilai += $nilai;
    $jumlah++;
}

$rataRata = ($totalNilai / $jumlah);

echo "Total nilai: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";

echo "<br>";
$hargaProduk = 120000;
$diskonPersen = 20;
$hargaDiskon = 0;

if ($hargaProduk > 100000) {
    $diskon = ($diskonPersen / 100) * $hargaProduk;
    $hargaDiskon = $hargaProduk - $diskon;
} else {
    $hargaDiskon = $hargaProduk;
}

echo "Harga awal produk: Rp " . $hargaProduk, 0, ',', '.' . "<br>";
echo "Diskon: {$diskonPersen}% <br>";
echo "Harga setelah diskon: Rp " . $hargaDiskon, 0, ',', '.' . "<br>";

echo "<br>";
$poin = 520; 

$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: {$poin} <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah} <br>";
?>