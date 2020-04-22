<?php
$wilayah = $_POST['wilayah'];
$jml_positif = $_POST['jml_positif'];
$jml_dirawat = $_POST['jml_dirawat'];
$jml_sembuh = $_POST['jml_sembuh'];
$jml_meninggal = $_POST['jml_meninggal'];
$nama = $_POST['nama_operator'];
$nim = $_POST['nim'];
$waktu = date("d F Y | H:i:s");

$nf = "data_pasien.txt";
$fp = fopen($nf, "r+");
$data = fgets($fp, 50);
$comfile = file($nf);

rewind($fp);
fwrite(
    $fp,
    "<p>Data Pemantauan Covid-19 wilayah $wilayah</p>
		<p>Per $waktu</p>
		<p>$nama/$nim</p><br>
		<table class='table1'>
			<tr>
				<td>Positif</td>
				<td>Dirawat</td>
				<td>Sembuh</td>
				<td>Meninggal</td>
			</tr>
			<tr>
				<td>$jml_positif</td>
				<td>$jml_dirawat</td>
				<td>$jml_sembuh</td>
				<td>$jml_meninggal</td>
			</tr>
		</table>
		<br>"
);

for ($i = 0; $i < 20; $i++) {
    fwrite($fp, $comfile[$i]);
}

fclose($fp);

if ($_POST['kirim']) {
    header("location: data_pasien.php");
}
