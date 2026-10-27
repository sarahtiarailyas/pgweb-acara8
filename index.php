<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username   = "root";
$password   = ""; // Kosongkan jika menggunakan XAMPP standar
$dbname     = "latihan";

// Buat koneksi ke MySQL (create connection)
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek status koneksi (check connection)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil seluruh data dari tabel penduduk
$sql = "SELECT * FROM penduduk";
$result = $conn->query($sql);

// Tambahkan baris ini tepat sebelum pengecekan if
echo "<a href='input/index.html'>Input Data Baru</a><br><br>";

//pengecekan if
if ($result->num_rows > 0) {
    // Menampilkan header tabel HTML (termasuk kolom longitude & latitude)
    echo "<table border='1px'>
            <tr>
                <th>Kecamatan</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Luas</th>
                <th>Jumlah Penduduk</th>
            </tr>";

    // Menampilkan baris data (output data of each row)
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["kecamatan"] . "</td>
                <td>" . $row["longitude"] . "</td>
                <td>" . $row["latitude"] . "</td>
                <td>" . $row["luas"] . "</td>
                <td align='right'>" . $row["jumlah_penduduk"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan";
}

$conn->close();
?>