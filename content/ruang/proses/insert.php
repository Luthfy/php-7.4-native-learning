<?php

    require 'config/koneksi.php';

    $idRuang    = $_POST['id'];
    $namaRuang  = $_POST['nama_ruang'];

    $query = mysqli_query($connect, "INSERT INTO ruang ( `id`, `nama_ruang`) VALUES ('$idRuang','$namaRuang')");

    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Disimpan')) { window.location.href = 'index.php?page=ruang' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Disimpan')) { window.location.href = 'index.php?page=ruang&task=insert' }
            </script>
        ";
    }

?>