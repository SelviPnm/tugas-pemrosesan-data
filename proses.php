<?php
$bilangan1 = $_GET['bil1'];
$bilangan2 = $_GET['bil2'];
$hitung = $_GET['perhitungan'];
echo "Bilangan 1 adalah $bilangan1 <br>";
echo "Bilangan 2 adalah $bilangan2 <br>";

if ($hitung == 1) {
	$hasil = $bilangan1 + $bilangan2;
	echo "Hasil pertambahan adalah $hasil";
}

elseif ($hitung == 2) {
	$hasil = $bilangan1 - $bilangan2;
	echo "Hasil pengurangan adalah $hasil";
}

elseif ($hitung == 3) {
	$hasil = $bilangan1 * $bilangan2;
	echo "Hasil perkalian adalah $hasil";
}

elseif ($hitung == 4) {
	$hasil = $bilangan1 / $bilangan2;
	echo "Hasil pembagian adalah $hasil";
}
?>
