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
              <li class="breadcrumb-item"><a href="/karyawan">Data Karyawan</a></li>
              <li class="breadcrumb-item active">Tambah Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Catatan:</h5>
        Isi form yang tersedia dibawah ini untuk mengisi data karyawan baru. <b>Data NIK dan Nama Lengkap tidak dapat diubah setelah data di submit!</b>
    </div>

    <form id="tambahkaryawan" action="<?php echo base_url(); ?>karyawan/tambah/baru" method="post">
    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Diri Karyawan</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="NIK">NIK</label>
                <input type="number" id="nik" name="nik" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select id="jabatan" name="jabatan" name="jabatan" class="form-control custom-select">
                  <option selected disabled>Pilih Jabatan...</option>
                  <option value="Manager">Manager</option>
                  <option value="Karyawan Tetap">Karyawan Tetap</option>
                  <option value="Karyawan Kontrak">Karyawan Kontrak</option>
                  <option value="Magang">Magang</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat Saat Ini</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="2"></textarea>
              </div>
              <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="number" name="no_telepon" id="no_telepon" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Keuangan Karyawan</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="bank">Nama Bank</label>
                <input type="text" id="bank" name="bank" class="form-control">
              </div>
              <div class="form-group">
                <label for="no_rekening">Nomor Rekening</label>
                <input type="number" id="no_rekening" name="no_rekening" class="form-control">
              </div>
              <div class="form-group">
                <label for="nomorrekening">Gaji Pokok</label>
                <input type="text" id="gaji" name="gaji" class="form-control">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control custom-select">
                  <option value="AKTIF" selected>Aktif</option>
                  <option value="CUTI">Cuti</option>
                  <option value="TUGAS KELUAR">Tugas Keluar</option>
                  <option value="SUSPENDED">Keluar / Diskors</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>

          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="/karyawan" class="btn btn-secondary">Batal</a>
          <button type="submit" class="btn btn-success float-right">Submit Data Karyawan</button>
        </div>
      </div>

    </section>

</div>
</form>

</body>

<!-- jQuery -->
<script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url('adminLTE/plugins/sweetalert2/sweetalert2.all.min.js')?>"></script>

<script>
document.getElementById('tambahkaryawan').addEventListener('submit', function(event) {
    event.preventDefault();

    Swal.fire({
        title: "Tambah data karyawan?",
        text: "Pastikan data karyawan sudah benar.",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Konfirmasi",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();

            Swal.fire({
                title: "Data ditambah!",
                text: "Data karyawan berhasil ditambahkan.",
                icon: "success"
            });
            setTimeout(function() {
                window.location.href = '/karyawan';
            }, 5000);
        }
    });
});
</script>