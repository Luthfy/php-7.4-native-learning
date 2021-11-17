<?php

    require 'config/koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM barang WHERE id = $id");

    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Dihapus')) { window.location.href = 'index.php?page=barang' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Dihapus')) { window.location.href = 'index.php?page=barang' }
            </script>
        ";
    }

?>