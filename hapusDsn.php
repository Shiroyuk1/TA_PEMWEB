<?php

require 'functionDosen/function.php';


$id = $_GET["id"];

if ( hapus($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil dihapus');
            document.location.href = 'inded.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal diHapus');
            document.location.href = 'inded.php';
        </script>
    ";
}
