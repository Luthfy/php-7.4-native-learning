<?php

    require 'config/koneksi.php';

    $id                 = $_POST['id'];
    $idRuang            = $_POST['id_ruang'];
    $namaBarang         = $_POST['nama_barang'];
    $merkBarang         = $_POST['merk'];
    $jumlahBarang       = $_POST['jumlah_barang'];
    $kondisiBarang      = $_POST['kondisi_barang'];
    $tanggalBeliBarang  = date("Y-m-d", strtotime($_POST['tgl_beli']));

    $query = mysqli_query($connect, "UPDATE barang SET `nama_barang`='$namaBarang', `kondisi_barang`='$kondisiBarang', `tgl_beli`= '$tanggalBeliBarang', `merek`='$merkBarang', `jumlah_barang`='$jumlahBarang', `id_ruang`='$idRuang' WHERE `id`=$id");

    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Disimpan')) { window.location.href = 'index.php?page=barang' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Disimpan')) { window.location.href = 'index.php?page=barang&task=update&id=$id' }
            </script>
        ";
    }


?>