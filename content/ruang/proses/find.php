<?php 

    require 'config/koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($connect, "SELECT * FROM ruang WHERE id = '$id'");

    $data = mysqli_fetch_assoc($query);

?>