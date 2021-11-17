<?php

    require 'config/koneksi.php';

    $jenis_pengguna     = $_POST['jenis_pengguna'];
    $nama               = $_POST['nama'];
    $username           = $_POST['username'];
    $password           = MD5($_POST['password']);

    $query = mysqli_query($connect, "INSERT INTO user (`jenis_pengguna`,`nama`, `username`, `password`) VALUES ('$jenis_pengguna','$nama','$username','$password')");

    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Disimpan')) { window.location.href = 'index.php?page=user' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Disimpan')) { window.location.href = 'index.php?page=user&task=insert' }
            </script>
        ";
    }

?>