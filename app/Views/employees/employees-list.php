<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Note:</h5>
        Semua data karyawan akan ditampilkan di tabel bawah ini. Harap diingat,  <b>penghapusan atau perubahan data tidak bisa dikembalikan.</b>
    </div>
            <!-- /.row -->
            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a type="button" href="/employees/add" class="btn btn-block btn-primary btn-sm">Tambah Karyawan</a></h3>

                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <!--<div class="card-body table-responsive p-0" style="height: 800px;">-->
              <div class="card-body table-responsive p-0" style="height: 100%;">
                <table id="employee-table" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Alamat</th>
                      <th>No. Telepon</th>
                      <th>Bank</th>
                      <th>No. Rekening</th>
                      <th>Gaji Pokok</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>10341531515151</td>
                      <td>John Doe</td>
                      <td>Karyawan Tetap</td>
                      <td>Hotel Pondok Indah Lt. 6</td>
                      <td>083241359413</td>
                      <td>Mandiri</td>
                      <td>1234567890</td>
                      <td>Rp 1.000.000</td>
                      <td><span class="badge bg-success">AKTIF</span></td>
                      <td class="project-actions">
                          
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>

<!-- jQuery -->
<script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- DataTable Display -->
<script src="<?=base_url('adminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>


<script>
  $(function () {
    $('#employee-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>