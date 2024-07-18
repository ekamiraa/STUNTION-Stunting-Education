<?php
session_start();

//import database
include('koneksi.php');

    if(isset($_POST['edit_btn'])) {
        // Receive data from the form
        $id_user = $_SESSION['id_user'];//edit berdasarkan session dari user
        $nama_lengkap = $_POST['nama_lengkap'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $nama_anak = $_POST['nama_anak'];
        $umur_anak = $_POST['umur_anak'];
        
        // Query to update user data
        $query = "UPDATE user SET nama_lengkap = '$nama_lengkap', username = '$username', email = '$email', pass = '$password', nohp = '$nohp', nama_anak = '$nama_anak', umur_anak = '$umur_anak', alamat = '$alamat' WHERE id_user = '$id_user'";
        $result = mysqli_query($conn, $query);

        if($result) {
            echo "Data Profile berhasil di update";
            header("Location: ../profile2.php");
            exit(0);
        } else {
            echo "Data Profile gagal diupdate";
            header("Location: ../form_edit_profile.php");
            exit(0);
        }

    } else {
        //Edit Profile Gagal
        echo "Error updating user data.";
        header("Location: ../form_edit_profile.php");
        exit(0);
    }

    mysqli_close($conn);
?>