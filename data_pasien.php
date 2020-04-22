<html>

<head>
    <title>UTS PEM-WEB2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div id="kotak">
        <h3>Form Data Pasien <b style="color:red;">Covid-19</b></h3>
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Wilayah</td>
                    <td class="samadengan">:</td>
                    <td>
                        <select name="wilayah" required>
                            <option value="">Pilih Wilayah</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Positif</td>
                    <td class="samadengan">:</td>
                    <td><input type="text" name="jml_positif" placeholder="Jumlah Positif" required /></td>
                </tr>
                <tr>
                    <td>Jumlah Dirawat</td>
                    <td class="samadengan">:</td>
                    <td><input type="text" name="jml_dirawat" placeholder="Jumlah Dirawat" /></td>
                </tr>
                <tr>
                    <td>Jumlah Sembuh</td>
                    <td class="samadengan">:</td>
                    <td><input type="text" name="jml_sembuh" placeholder="Jumlah Sembuh" /></td>
                </tr>
                <tr>
                    <td>Jumlah Meninggal</td>
                    <td class="samadengan">:</td>
                    <td><input type="text" name="jml_meninggal" placeholder="Jumlah Meninggal" /></td>
                </tr>
                <tr>
                    <td>Nama Operator</td>
                    <td class="samadengan">:</td>
                    <td><input type="text" name="nama_operator" placeholder="Nama Anda" /></td>
                </tr>
                <tr>
                    <td>NIM Mahasiswa</td>
                    <td class="samadengan">:</td>
                    <td><input type="text" name="nim" placeholder="NIM Anda" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>&nbsp;&nbsp;<input type="submit" name="kirim" value="kirim" />&nbsp;<input type="reset" name="del" value="Hapus" /></td>

                </tr>
            </table>

        </form>
    </div>
    <div id="kotak2">

        <?php
        $file = "data_pasien.txt";
        $fp = fopen($file, "r");

        while (!feof($fp)) {
            $baca = fgets($fp, 50);
            print("$baca");
        }
        fclose($fp);
        ?>

    </div>
    <div id="footer">
        Rivaldo Galuh Prihandono &copy; Copyright 2020.
    </div>
</body>

</html>