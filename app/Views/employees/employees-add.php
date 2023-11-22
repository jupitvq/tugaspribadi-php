<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/employees">Employees</a></li>
              <li class="breadcrumb-item active">Add Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Catatan:</h5>
        Isi form yang tersedia dibawah ini untuk mengisi data karyawan baru.
    </div>

    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Diri Karyawan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="NIK">NIK</label>
                <input type="number" id="NIK" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select id="jabatan" class="form-control custom-select">
                  <option selected disabled>Select...</option>
                  <option>Manager</option>
                  <option>Karyawan Tetap</option>
                  <option>Karyawan Kontrak</option>
                  <option>Magang</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat Saat Ini</label>
                <textarea id="alamat" class="form-control" rows="2"></textarea>
              </div>
              <div class="form-group">
                <label for="notelp">Nomor Telepon</label>
                <input type="number" id="notelp" class="form-control">
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

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="namabank">Nama Bank</label>
                <input type="text" id="namabank" class="form-control">
              </div>
              <div class="form-group">
                <label for="nomorrekening">Nomor Rekening</label>
                <input type="number" id="nomorrekening" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>

          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="/employees" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Submit Data" class="btn btn-success float-right">
        </div>
      </div>

    </section>

</div>

<!-- jQuery -->
<script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
