@extends('layout.master')
@section('title', 'Sistem Penduduk')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">List User </h3>
        </div>
          <!-- /.card-body -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card-body table-responsive p-0">
            <div class="col-4">
                <h4><a href="tambah.php" class="badge bg-info">+</a></h4>
              </div>
            <table class="table table-head-fixed text-nowrap">
                <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
                </tr>
                <?php $i = 1;?>
                <?php foreach($warga as $row): ?> 
                <tr>
                    <td><?php echo $i ?></td>
                    <td><img src="img/<?php echo $row["foto"]?>" width="50"></td>
                    <td><?php echo $row["nip"]?></td>
                    <td><?php echo $row["nama"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["alamat"]?></td>
                    <td><a href="ubah.php?id=<?php echo $row["id"]; ?>" class="badge bg-success"> Edit</a>
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>"  class="badge bg-danger " onclick=
                    "return confirm('anda yakin?');"> Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

    @endsection