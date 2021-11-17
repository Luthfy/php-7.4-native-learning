<?php

    require 'config/koneksi.php';

    $id                 = $_POST['id'];
    $jenis_pengguna     = $_POST['jenis_pengguna'];
    $nama               = $_POST['nama'];
    $username           = $_POST['username'];
    $password           = $_POST['password'];

    if ($password != null) {
        $query = mysqli_query($connect, "UPDATE user SET `nama`='$nama', `username`='$username', `password`=MD5('$password'), `jenis_pengguna`='$jenis_pengguna' WHERE `id`='$id'");
    } else {
        $query = mysqli_query($connect, "UPDATE user SET `nama`='$nama', `username`='$username', `jenis_pengguna`='$jenis_pengguna' WHERE `id`='$id'");
    }
    
    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Disimpan')) { window.location.href = 'index.php?page=user' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Disimpan')) { window.location.href = 'index.php?page=user&task=update&id=$id' }
            </script>
        ";
    }


?>