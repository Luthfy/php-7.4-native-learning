<?php 

session_start(); 

$path = explode("/", $_SERVER['REQUEST_URI']);

if ($path[count($path) - 1] == 'login.php') {
    if (@$_SESSION['is_login']) {
        header("location: http://".$_SERVER['HTTP_HOST']."/webproject/index.php");
    }
} else if ($path[count($path) - 1] == 'index.php') {
    if (@$_SESSION['is_login'] == false) {
        header("location: http://".$_SERVER['HTTP_HOST']."/webproject/login.php");
    }
} else if ($path[count($path) - 1] == null) {
    if (@$_SESSION['is_login'] == false) {
        header("location: http://".$_SERVER['HTTP_HOST']."/webproject/login.php");
    }
}

// restrict area
$page = $_GET['page'];

switch ($_SESSION['jenis_pengguna']) {
    case 'admin':
        $pages      = ['user', 'barang', 'ruang'];
        $checking   = in_array($page, $pages);

        if (!$checking) {
            http_response_code(403);
            die();
        }
        break;

    case 'guru':
        $pages      = ['barang', 'ruang'];
        $checking   = in_array($page, $pages);

        if (!$checking) {
            http_response_code(403);
            include('content/errors/my_403.php');
            die();
        }        
        break;
    
    default:
        # code...
        break;
}

