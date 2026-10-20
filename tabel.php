<?php
// Menggunakan array multidimensi untuk menyimpan data penduduk
$data_penduduk = [
    ["kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497],
    ["kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886],
    ["kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129],
    ["kecamatan" => "Godean",  "luas" => 26.84, "jumlah_penduduk" => 72028],
    ["kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penduduk (PHP)</title>
</head>
<body>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>
        
        <?php 
        // Menggunakan perulangan (iterasi) foreach untuk menampilkan data[cite: 1]
        foreach ($data_penduduk as $row) { 
        ?>
            <tr>
                <td><?php echo $row['kecamatan']; ?></td>
                <td><?php echo $row['luas']; ?></td>
                <td><?php echo $row['jumlah_penduduk']; ?></td>
            </tr>
        <?php 
        } 
        ?>
    </table>

</body>
</html>