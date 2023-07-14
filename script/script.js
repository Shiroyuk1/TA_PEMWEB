$(document).ready(function () {
    var delayTimer;
    
    // Fungsi untuk menampilkan animasi loading
    function showLoading() {
        $("#spinner").show();
    }

    // Fungsi untuk menyembunyikan animasi loading
    function hideLoading() {
        $("#spinner").hide();
    }

    // Fungsi untuk melakukan pencarian
    function search() {
        var keyword = $("#search-input").val().toLowerCase();
        clearTimeout(delayTimer);

        showLoading(); // Menampilkan animasi loading

        // Delay untuk buffering saat pengguna mengetik
        delayTimer = setTimeout(function () {
            var $rows = $(".table tbody tr");
            var noResults = true;

            $rows.hide(); // Sembunyikan semua baris

            // Loop melalui setiap baris dan periksa keyword
            $rows.each(function () {
                var $row = $(this);
                var rowData = $row.text().toLowerCase();

                if (rowData.indexOf(keyword) > -1) {
                    $row.show(); // Tampilkan baris jika keyword cocok
                    noResults = false;
                }
            });

            hideLoading(); // Menyembunyikan animasi loading

            if (noResults) {
                $("#not-found").show(); // Tampilkan pesan "Not Found" jika tidak ada hasil
            } else {
                $("#not-found").hide(); // Sembunyikan pesan "Not Found" jika ada hasil
            }
        }, 300);
    }

    // Event listener saat tombol pencarian ditekan
    $("#search-button").click(function () {
        search();
    });

    // Event listener saat teks input pencarian berubah
    $("#search-input").on("keyup", function () {
        search();
    });
});