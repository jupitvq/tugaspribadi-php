<style>
        .dataTables_filter {
            float: right; /* Aligns the search filter to the right */
        }
        .dt-buttons {
            margin-bottom: 20px; /* Adjusts the gap between the buttons and the table */
        }
        .info-paging {
            display: flex;
            justify-content: space-between;
        }
        
</style>

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
        <h5><i class="fas fa-info"></i> Catatan:</h5>
        Semua data karyawan akan ditampilkan di tabel bawah ini. Harap diingat,  <b>penghapusan atau perubahan data tidak bisa dikembalikan.</b>
    </div>

    <?php
        if(session()->getFlashData('success')){
        ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
        }
        ?>
            <!-- /.row -->
            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex flex-row">
              <a type="button" href="/karyawan/tambah" class="btn btn-primary mr-2">Tambah Karyawan</a>
              <!--
              <div class="input-group input-group-sm ml-auto" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                -->
                  
                <h3 class="card-title"></h3>
                <div class="card-tools">
                  
                </div>
              </div>
              <!-- /.card-header -->
              <!--<div class="card-body table-responsive p-0" style="height: 800px;">-->
              <div class="card-body" style="height: 100%;">
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
                  <?php foreach ($karyawans as $key => $karyawan) : ?>
                    <tr>
                      <td><?= ++$key ?></td>
                      <td><?= $karyawan['nik'] ?></td>
                      <td><?= $karyawan['nama'] ?></td>
                      <td><?= $karyawan['jabatan'] ?></td>
                      <td><?= $karyawan['alamat'] ?></td>
                      <td><?= $karyawan['no_telepon'] ?></td>
                      <td><?= $karyawan['bank'] ?></td>
                      <td><?= $karyawan['no_rekening'] ?></td>
                      <td><?= $karyawan['gaji'] ?></td>
                      <td>
                      <?php
                          $warnastatus = $karyawan['status'];
                          $badgeColor = '';
                          switch ($warnastatus) {
                            case 'OUTBOUND':
                              $badgeColor = 'info';
                              break;
                            case 'CUTI':
                              $badgeColor = 'warning';
                              break;
                            case 'AKTIF':
                              $badgeColor = 'success';
                              break;
                            case 'SUSPENDED':
                              $badgeColor = 'danger';
                              break;
                            default:
                              $badgeColor = 'default';
                              break;
                          }
                        ?>
                        <span class="badge bg-<?= $badgeColor; ?>"><?= $karyawan['status'] ?></span>
                      </td>
                      <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="/karyawan/ubah/<?= $karyawan['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                          </a>
                          <button type="button" class="btn btn-danger btn-sm" id="tombolhapus" onclick="konfirmasihapus(event, '/karyawan/hapus/<?= $karyawan['id'] ?>')" >
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </button>
                      </td>
                    </tr>
                    <?php endforeach; ?>
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
<!-- SweetAlert2 -->
<script src="<?=base_url('adminLTE/plugins/sweetalert2/sweetalert2.all.min.js')?>"></script>

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
function konfirmasihapus(event, href) {
    event.preventDefault();

    Swal.fire({
        title: "Apakah anda yakin?",
        text: "Anda akan menghapus data karyawan ini!",
        footer: "<b>PENTING</b>: Data akan hilang secara permanen setelah dihapus.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Dihapus!",
                text: "Data karyawan berhasil dihapus.",
                icon: "success"
            });
            setTimeout(function() {
                window.location.href = href;
            }, 2000);
        }
    });
};



  $(function () {
    $('#employee-table').DataTable({
      "language": {
            "search": ""
        },
      "dom": 'Bftrpi',
      "buttons": ["csv", "excel", "pdf", "print"],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
    
    $('input[type="search"]').attr('placeholder', 'Pencarian...');
    var infoAndPaging = $('<div/>').addClass('info-paging');
    $('.dataTables_info').appendTo(infoAndPaging);
    $('.dataTables_paginate').appendTo(infoAndPaging);
    infoAndPaging.appendTo('.dataTables_wrapper');
    //$('.btn.btn-primary.btn-sm').insertBefore('.dt-buttons');
  });
</script>