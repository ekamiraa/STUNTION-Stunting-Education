/**
 * Login
 */
document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "forms/login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          alert(response.message);

          if (response.status === "success") {
            document.getElementById("loginForm").reset();
            window.location.href = "http://localhost/Logis/dashboard.php";
          } else {
            document.getElementById("loginForm").reset();
            window.location.href = "http://localhost/Logis/login.php";
          }

          // Reset form setelah berhasil registrasi
          document.getElementById("loginForm").reset();
        } else {
          var errorMessage;
          if (xhr.status === 0) {
            errorMessage =
              "Koneksi terputus. Pastikan Anda terhubung ke internet.";
          } else {
            errorMessage = "Terjadi kesalahan pada koneksi: " + xhr.status;
          }
          alert("Login gagal. " + errorMessage);
        }
      }
    };
    xhr.send("username=" + username + "&password=" + password);
  });
