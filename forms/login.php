<?php
session_start();
// Import the connection file
include('koneksi.php');

if (isset($_POST['login_btn'])) {
    // Receive data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $op = $_GET['op'];

    if($op == "in") {
        // Query to check username and password
        $query = "SELECT * FROM user WHERE username = '$username' AND pass = '$password'";
        $result = mysqli_query($conn, $query);  

        if(mysqli_num_rows($result)==1) {
            $data = $result->fetch_array();
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            header("Location: ../dashboard.php");
            exit(0);

        } else {
        //Login gagal
        header("Location: ../profile2.php");
        exit(0);
        }
        }
    } else if ($op == "out") {
    unset($_SESSION['id_user']);
    unset($_SESSION['username']);
    header("Location: ../form_login.php");
}

mysqli_close($conn);

?>
