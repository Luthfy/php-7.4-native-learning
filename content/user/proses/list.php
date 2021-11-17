<?php 

    require 'config/koneksi.php';

    $query = mysqli_query($connect, 'SELECT * FROM user');

    if ($query != null) {
        $key = 0;
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".++$key."</td>
                    <td>".$fetch['jenis_pengguna']."</td>
                    <td>".$fetch['nama']."</td>
                    <td>".$fetch['username']."</td>
                    <td>
                        <a href='index.php?page=user&task=update&id=".$fetch['id']."' class='btn btn-success btn-sm'>Edit</a>
                        <a href='index.php?page=user&task=delete&id=".$fetch['id']."' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr>
            <td colspan='4' class='text-center text-italic'> - Data Tidak Ada - </td>
        </tr>";
    }

?>