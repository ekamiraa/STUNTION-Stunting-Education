<?php
    // Koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stuntion";

    // Buat koneksi
    $conn = new mysqli($host, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
        echo "Server not connected";
    }
?>
