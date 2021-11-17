<?php

    require 'config/koneksi.php';

    $id                 = $_POST['id'];
    $namaRuang          = $_POST['nama_ruang'];

    $query = mysqli_query($connect, "UPDATE ruang SET `nama_ruang`='$namaRuang' WHERE `id`='$id'");
    
    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Disimpan')) { window.location.href = 'index.php?page=ruang' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Disimpan')) { window.location.href = 'index.php?page=ruang&task=update&id=$id' }
            </script>
        ";
    }


?>