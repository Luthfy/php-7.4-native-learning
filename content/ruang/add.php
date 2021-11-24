<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Ruang</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Ruang</li>
            <li class="breadcrumb-item active">Add Ruang</li>
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
            <?php if ($_SESSION['jenis_pengguna'] == 'admin') : ?>
                <h3 class="card-title">Tambah Ruang</h3>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="index.php?page=ruang&task=insertproses" method="post">

                <div class="form-group">
                    <label for="nameLabel">Kode Ruang</label>
                    <input type="text" name="id" id="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nameLabel">Nama Ruang</label>
                    <input type="text" name="nama_ruang" id="nama-ruang" class="form-control">
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
