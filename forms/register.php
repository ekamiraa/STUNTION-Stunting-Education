<?php
    // Impor file koneksi.php
    require_once('koneksi.php');

    // Proses penerimaan data dari form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Periksa apakah username atau email sudah ada dalam database
    $checkQuery = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Data sudah ada dalam database, berikan pesan kesalahan
        $response = array('status' => 'error', 'message' => 'Username atau email sudah digunakan.');
        echo json_encode($response);
        exit(); // Keluar dari skrip
    }

    // Simpan data ke database
    $sql = "INSERT INTO user (nama_lengkap, username, email, pass) VALUES ('$nama', '$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Berikan tanggapan atau pesan ke client
        $response = array('status' => 'success', 'message' => 'Registrasi berhasil');
        echo json_encode($response);
        exit();
    } else {
        // Tangani kesalahan operasi database
        $response = array('status' => 'error', 'message' => 'Registrasi gagal: ' . $conn->error);
        echo json_encode($response);
        exit();
    }

    // Tutup koneksi database
    $conn->close();
?>
