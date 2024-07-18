document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Mengambil nilai input dari form
    var nama = document.getElementsByName("nama")[0].value;
    var username = document.getElementsByName("username")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var password = document.getElementsByName("password")[0].value;

    // Mengirim data ke server menggunakan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "forms/register.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Registrasi berhasil
          var response = JSON.parse(xhr.responseText);
          alert(response.message);
          if (response.status === "success") {
            document.getElementById("registrationForm").reset();
            window.location.href = "http://localhost/Logis/form_login.php";
          } else {
            document.getElementById("registrationForm").reset();
            window.location.href = "http://localhost/Logis/form_register.php";
          }

          // Reset form setelah berhasil registrasi
          document.getElementById("registrationForm").reset();
        } else {
          // Registrasi gagal
          var errorMessage;
          if (xhr.status === 0) {
            errorMessage =
              "Koneksi terputus. Pastikan Anda terhubung ke internet.";
          } else {
            errorMessage = "Terjadi kesalahan pada koneksi: " + xhr.status;
          }
          alert("Registrasi gagal. " + errorMessage);
        }
      }
    };
    xhr.send(
      "nama=" +
        nama +
        "&username=" +
        username +
        "&email=" +
        email +
        "&password=" +
        password
    );
  });
