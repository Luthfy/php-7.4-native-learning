
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Page</li>
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
          <h3 class="card-title">Daftar User</h3> <!--Tambahkan daftar barang -->
            <div class="card-tools">
              <div class="btn btn-tool">
                <a href="index.php?page=user&task=insert">Tambah User</a> <!--Tambahkan href -->
              </div>
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis User</th>
                  <th>Nama User</th>
                  <th>Username</th>
                  <th>Aksi</th>
                </tr>
              </thead>
            <tbody>
              <?php include "content/user/proses/list.php" ?>
            </tbody>
          </table>
        </div>
      </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->