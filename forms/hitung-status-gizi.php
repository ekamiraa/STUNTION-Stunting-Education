<?php
// Tentukan lokasi file csv
$file = 'Standar TB.csv';

// Buka file csv
$handle = fopen($file, 'r');

// Tentukan baris awal dan akhir data
$startRow = 3; // baris ke-3 karena baris pertama dan kedua adalah header
$endRow = count(file($file));

// Ambil input dari pengguna
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama_anak = $_POST['nama_anak'];
  $jenis_kelamin = $_POST['jenis-kelamin'];
  $umur = intval($_POST['umur']);
  $tinggi_badan = $_POST['tinggi_badan'];

  $found = false; // flag untuk menandakan apakah data ditemukan atau tidak

  // Looping untuk mencari data pada baris yang sesuai dengan input pengguna
  for ($i = $startRow; $i <= $endRow; $i++) {
    // Baca data pada tiap baris
    while (($data = fgetcsv($handle, 0, ';')) !== FALSE) {
      // hapus spasi kosong dan karakter baru
      $data = array_map('trim', $data);
      // Ambil data pada kolom pertama, kedua, ketiga, keempat, dan kelima
      $row_jenis_kelamin = $data[0];
      $row_umur = $data[1];
      $row_minus1sd = $data[2];
      $row_median = $data[3];
      $row_1sd = $data[4];

      // Cocokkan data pada baris dengan input pengguna
      if ($row_jenis_kelamin == $jenis_kelamin && $row_umur == $umur) {
        // Hitung panjang badan anak berdasarkan umur dengan menggunakan rumus
        if ($tinggi_badan < $row_median) {
          // Perhitungan pertama jika berat badan anak < median
          $pbu = ($tinggi_badan - $row_median) / ($row_median - $row_minus1sd);
        } else {
          // Perhitungan kedua jika berat badan anak > median
          $pbu = ($tinggi_badan - $row_median) / ($row_1sd - $row_median);
        }

        // Menyiapkan data untuk dikirim sebagai respons JSON
        $response = array(
          'status' => 'success',
          'category' => ""
        );

        // Set nilai kategori berdasarkan perhitungan 
        if ($pbu < -3) {
          $response['category'] = 'Severe Stunting';
        } elseif ($pbu < -2) {
          $response['category'] = 'Stunting';
        } elseif ($pbu <= 3) {
          $response['category'] = 'Normal';
        } else {
          $response['category'] = 'Tinggi';
        }

        // Set flag ditemukan menjadi true
        $found = true;

        // Keluar dari loop setelah data ditemukan
        break;
      }
    }
  }

  if (!$found) {
    $response = array(
      'status' => 'error',
      'message' => 'Data tidak ditemukan'
    );
  }

  // Mengembalikan respons sebagai JSON
  header('Content-Type: application/json');
  echo json_encode($response);

  // Menghentikan eksekusi skrip setelah mengirim respons JSON
  exit;
}

// Tutup file csv
fclose($handle);
?>
