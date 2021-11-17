<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Barang</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Barang</li>
            <li class="breadcrumb-item active">Add Barang</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Barang</h3>
        </div>
        <div class="card-body">
            <form action="index.php?page=barang&task=insertproses" method="post">

                <div class="form-group">
                    <label for="nameLabel">Ruang</label>
                    <select name="id_ruang" id="id-ruang" class="form-control" required>
                        <?php 
                            require 'config/koneksi.php';

                            $query = mysqli_query($connect, 'SELECT * FROM ruang');

                            if ($query != null) {
                                while ($fetch = mysqli_fetch_array($query)) {
                                    echo "<option value='".$fetch['id']."'>".$fetch['nama_ruang']."</option>";
                                }
                            } else {
                                echo "<option value=''> - Tidak Ada Ruang - </option>";
                            }
                        
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="nameLabel">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama-barang" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nameLabel">Merk Barang</label>
                    <input type="text" name="merk" id="merk-barang" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nameLabel">Tanggal Beli Barang</label>
                    <input type="date" name="tgl_beli" id="tgl-beli" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nameLabel">Jumlah Barang</label>
                    <input type="number" name="jumlah_barang" id="jumlah-barang" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nameLabel">Merk Barang</label>
                    <select name="kondisi_barang" id="kondisi-barang" class="form-control">
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                
                <div class="form-grou">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
