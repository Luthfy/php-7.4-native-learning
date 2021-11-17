<?php

    session_start();
    require '../../config/koneksi.php';

    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $query  = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $user   = mysqli_fetch_array($query);
    
    if ($user != null) {
        $_SESSION['is_login'] = true;
        $_SESSION['jenis_pengguna'] = $user['jenis_pengguna'];
        $_SESSION['username'] = $user['username'];
        header("Location: http://".$_SERVER['HTTP_HOST']."/webproject/index.php");
    } else {
        header("Location: http://".$_SERVER['HTTP_HOST']."/webproject/login.php");
    }


