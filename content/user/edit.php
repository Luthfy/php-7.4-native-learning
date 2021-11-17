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
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active">Add User</li>
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
            <h3 class="card-title">Tambah User</h3>
        </div>
        <div class="card-body">
            <?php require 'content/user/proses/find.php'; ?>

            <form action="index.php?page=user&task=updateproses" method="post">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $data['id'] ?? '' ?>">

                <div class="form-group">
                    <label for="nameLabel">Jenis Pengguna</label>
                    <select name="jenis_pengguna" id="jenis_pengguna" class="form-control" required>
                    <?php 
                            if ($data['jenis_pengguna'] == 'admin') {
                                echo '<option value="admin" selected>Administrator</option>';
                                echo '<option value="guru">Guru</option>';
                            } else {
                                echo '<option value="admin">Administrator</option>';
                                echo '<option value="guru" selected>Guru</option>';
                            }
                        ?>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="nameLabel">Nama Pengguna</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?? '' ?>">
                </div>
                
                <div class="form-group">
                    <label for="userNameLabel">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?? '' ?>">
                </div>

                <div class="form-group">
                    <label for="userPasswordLabel">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
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
