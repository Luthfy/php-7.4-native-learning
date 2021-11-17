<?php 

    require 'config/koneksi.php';

    $query = mysqli_query($connect, 'SELECT * FROM barang');

    if ($query != null) {
        $key = 0;
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".++$key."</td>
                    <td>".$fetch['id_ruang']."</td>
                    <td>".$fetch['nama_barang']."</td>
                    <td>".$fetch['merek']."</td>
                    <td>".$fetch['tgl_beli']."</td>
                    <td>".$fetch['kondisi_barang']."</td>
                    <td>".$fetch['jumlah_barang']."</td>
                    <td>
                        <a href='index.php?page=barang&task=update&id=".$fetch['id']."' class='btn btn-success btn-sm'>Edit</a>
                        <a href='index.php?page=barang&task=delete&id=".$fetch['id']."' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr>
            <td colspan='4' class='text-center text-italic'> - Data Tidak Ada - </td>
        </tr>";
    }

?>