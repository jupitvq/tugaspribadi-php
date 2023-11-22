<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
Swal.fire({
  title: "Selamat Datang, <?php echo $session = session()->get('name'); ?>",
  text: "Anda telah berhasil login!",
  icon: "success",
  confirmButtonText: `
    Lanjut
  `,
});
</script>
 
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card-body">
      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i> Halo, <?php echo $session = session()->get('name'); ?>.</h5>
          Anda dapat mengunjungi <a href="/employees">menu karyawan</a> untuk mengatur data karyawan!
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Karyawan</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">
                  Menampilkan data karyawan</h6>

                <p class="card-text">Anda dapat melihat, menambahkan, menghapus, atau mengubah data karyawan yang sudah ada.</p>
                <a href="/employees" class="btn btn-primary">
                <i class="fas fa-users"></i>
                 Atur Karyawan</a>
              </div>
            </div>

            <div class="card card-danger">
              <div class="card-header">
                <h5 class="m-0">Sign Out</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Merasa anda ingin sign out?</h6>

                <p class="card-text">Jika anda sudah selsai, klik tombol <b>Logout</b> dibawah!</p>
                <a href="/logout" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#ffffff"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg> 
                Logout</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- jQuery -->
<script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>