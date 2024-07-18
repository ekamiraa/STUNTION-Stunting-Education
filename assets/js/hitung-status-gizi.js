// Fungsi untuk mengubah isi modal body
function updateModalBodyContent(response) {
  var modalBody = document.querySelector("#myModal .modal-body");

  if (response.status === "success") {
    // Tampilkan kategori berdasarkan respons
    var category = "";
    switch (response.category) {
      case "Severe Stunting":
        category =
          "<strong><em>Severe Stunting (Sangat Pendek)</em></strong>" +
          "<p>Anak Anda tergolong sangat pendek diusianya. Yuk mulai sekarang cukupi kebutuhan nutrisi Anak Anda dan biasakan olahraga sesuai minat dan bakatnya.</p>";
        break;
      case "Stunting":
        category =
          "<strong><em>Stunting (Pendek)</em></strong>" +
          "<p>Anak Anda menderita stunting sehingga tergolong pendek diusianya. Yuk mulai sekarang cukupi kebutuhan nutrisi Anak Anda dan biasakan olahraga sesuai minat dan bakatnya.</p>";
        break;
      case "Normal":
        category =
          "<strong><em>Normal</em></strong>" +
          "<p>Anak Anda memiliki tinggi ideal diusianya. Meskipun begitu, tetap cukupi kebutuhan nutrisi Anak Anda dan biasakan olahraga sesuai minat dan bakatnya.</p>";
        break;
      default:
        category =
          "<strong><em>Tinggi</em></strong>" +
          "<p>Anak Anda termasuk sangat tinggi diusianya. Meskipun begitu, tetap cukupi kebutuhan nutrisi Anak Anda dan biasakan olahraga sesuai minat dan bakatnya.</p>";
    }

    // Update isi modal body
    modalBody.innerHTML =
      "<p>Berikut adalah hasil status gizi anak Anda.</p>" +
      "<p><strong>Kategori:</strong> " +
      category +
      "</p>" +
      "<p>Rekomendasi makanan bergizi dapat dilihat <a href='http://localhost/Logis/rekomendasi-makanan.php'>di sini</a></p>";
  } else {
    modalBody.innerHTML = "<p>" + response.message + "</p>";
  }
}

// Tangkap acara submit form
document
  .getElementById("cek-status-gizi")
  .addEventListener("submit", function (e) {
    e.preventDefault(); // Mencegah submit form

    var form = this;
    var url = form.getAttribute("action");
    var formData = new FormData(form);

    // Kirim data form ke server menggunakan metode POST
    fetch(url, {
      method: "POST",
      body: new URLSearchParams(formData),
    })
      .then(function (response) {
        return response.json(); // Mengubah respons menjadi objek JSON
      })
      .then(function (data) {
        // Panggil fungsi untuk mengubah isi modal body dengan respons yang diterima
        updateModalBodyContent(data);

        // Tampilkan modal
        var myModal = new bootstrap.Modal(document.getElementById("myModal"));
        myModal.show();
      })
      .catch(function (error) {
        console.error(error);
      });
  });

// Tangkap tombol close pada modal
var closeButton = document.querySelector("#myModal .modal-footer .btn");

// Tambahkan event listener pada tombol close
closeButton.addEventListener("click", function () {
  // Muat ulang halaman
  location.reload();
});
