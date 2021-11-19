
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
              <li class="breadcrumb-item active">Ruang Page</li>
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
          <h3 class="card-title">Daftar Ruang</h3> <!--Tambahkan daftar barang -->
            <div class="card-tools">
              <div class="btn btn-tool">
                <a href="pdf/ruang.php" class="btn btn-warning btn-sm mx-1">Cetak Daftar Ruang</a> <!--Tambahkan href -->
                <a href="index.php?page=ruang&task=insert" class="btn btn-primary btn-sm mx-1">Ruang Barang</a> <!--Tambahkan href -->
              </div>
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Ruang</th>
                  <th>Nama Ruang</th>
                  <th>Aksi</th>
                </tr>
              </thead>
            <tbody>
              <?php include "content/ruang/proses/list.php" ?>
            </tbody>
          </table>
        </div>
      </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->