<?php

    require 'config/koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM ruang WHERE id = $id");

    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Dihapus')) { window.location.href = 'index.php?page=ruang' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Dihapus')) { window.location.href = 'index.php?page=ruang' }
            </script>
        ";
    }

?>