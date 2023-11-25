<style>
label.error {
  font-weight: normal !important;
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
              <li class="breadcrumb-item"><a href="/karyawan">Data Karyawan</a></li>
              <li class="breadcrumb-item active">Edit Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

    <div class="callout callout-alert">
        <h5><i class="fas fa-info"></i> Catatan:</h5>
        Data NIK dan Nama Lengkap tidak dapat diubah. Data lama yang telah terubah tidak dapat dikembalikan kembali.
    </div>

    <form id="editkaryawan" action="<?= base_url('karyawan/ubah/update/'.$karyawan['id']) ?>" method="post">
    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Diri Karyawan</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="NIK">NIK</label>
                <input disabled type="number" id="nik" name="nik" class="form-control" value="<?= $karyawan['nik'] ?>">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input disabled type="text" id="nama" name="nama" class="form-control" value="<?= $karyawan['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select id="jabatan" name="jabatan" name="jabatan" class="form-control custom-select">
                  <option value="Manager" <?= ($karyawan['jabatan'] == 'Manager') ? 'selected' : '' ?>>Manager</option>
                  <option value="Karyawan Tetap" <?= ($karyawan['jabatan'] == 'Karyawan Tetap') ? 'selected' : '' ?>>Karyawan Tetap</option>
                  <option value="Karyawan Kontrak" <?= ($karyawan['jabatan'] == 'Karyawan Kontrak') ? 'selected' : '' ?>>Karyawan Kontrak</option>
                  <option value="Magang <?= ($karyawan['jabatan'] == 'Magang') ? 'selected' : '' ?>">Magang</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat Saat Ini</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="2"><?= $karyawan['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="number" name="no_telepon" id="no_telepon" class="form-control" value="<?= $karyawan['no_telepon'] ?>">
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
                <input type="text" id="bank" name="bank" class="form-control" value="<?= $karyawan['bank'] ?>">
              </div>
              <div class="form-group">
                <label for="no_rekening">Nomor Rekening</label>
                <input type="number" id="no_rekening" name="no_rekening" class="form-control" value="<?= $karyawan['no_rekening'] ?>">
              </div>
              <div class="form-group">
                <label for="nomorrekening">Gaji Pokok</label>
                <input type="text" id="gaji" name="gaji" class="form-control" value="<?= $karyawan['gaji'] ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>

          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Hubungan Kerja Karyawan</h3>

              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control custom-select">
                  <option value="AKTIF" <?= ($karyawan['status'] == 'AKTIF') ? 'selected' : '' ?>>Aktif</option>
                  <option value="CUTI" <?= ($karyawan['status'] == 'CUTI') ? 'selected' : '' ?>>Cuti</option>
                  <option value="OUTBOUND" <?= ($karyawan['status'] == 'OUTBOUND') ? 'selected' : '' ?>>Tugas Keluar</option>
                  <option value="SUSPENDED" <?= ($karyawan['status'] == 'SUSPENDED') ? 'selected' : '' ?>>Keluar / Diskors</option>
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
          <input type="submit" id="submit-button" value="Simpan Data Karyawan" class="btn btn-success float-right">
        </div>
      </div>

    </section>

</div>
</form>

</body>

<!-- jQuery -->
<script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- jquery-validation -->
<script src="<?=base_url('adminLTE/plugins/jquery-validation/jquery.validate.min.js')?>"></script>
<script src="<?=base_url('adminLTE/plugins/jquery-validation/additional-methods.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url('adminLTE/plugins/sweetalert2/sweetalert2.all.min.js')?>"></script>

<script>
$(document).ready(function () {
  var validator = $('#editkaryawan').validate({
    rules: {
      nik: {
        required: true,
        number: true,
        minlength: 16
      },
      nama: {
        required: true
      },
      jabatan: {
        required: true
      },
      alamat: {
        required: true
      },
      no_telepon: {
        required: true,
        number: true,
        minlength: 10
      },
      bank: {
        required: true,
      },
      no_rekening: {
        required: true,
      },
      gaji: {
        required: true,
      },
      status: {
        required: true,
      }
    },
    messages: {
      nik: {
        required: "Harap isi kolom NIK",
        number: "Harap isi kolom NIK dengan angka",
        minlength: "Harap isi kolom NIK dengan 16 digit angka"
      },
      nama: {
        required: "Harap isi kolom nama lengkap"
      },
      jabatan: {
        required: "Harap isi pilih jabatan karyawan"
      },
      alamat: {
        required: "Harap isi kolom alamat"
      },
      no_telepon: {
        required: "Harap isi kolom nomor telepon",
        number: "Harap isi menggunakan angka",
        minlength: "Harap isi kolom nomor telepon dengan minimal 10 digit angka"
      },
      bank: {
        required: "Harap isi kolom bank",
      },
      no_rekening: {
        required: "Harap isi kolom nomor rekening",
      },
      gaji: {
        required: "Harap isi kolom gaji pokok",
      },
      status: {
        required: "Harap isi kolom status karyawan",
      }
    },
    
    highlight: function (element) {
      $(element).addClass('is-invalid');
      $(element).removeClass('is-valid');
    },
    unhighlight: function (element) {
      $(element).removeClass('is-invalid');
      $(element).addClass('is-valid');
    },
    submitHandler: function (form) {
      form.submit();
    }
  });

  $('#submit-button').click(function (event) {
    event.preventDefault();

    if ($('#editkaryawan').valid()) {
      Swal.fire({
        title: "Ubah data karyawan?",
        text: "Pastikan data karyawan yang baru sudah benar.",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Konfirmasi",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
          $('#editkaryawan').submit();

            Swal.fire({
                title: "Data diubah!",
                text: "Data karyawan berhasil diubah.",
                icon: "success"
            });
            setTimeout(function() {
                window.location.href = '/karyawan';
            }, 5000);
        }
    });
    }
  });
});

</script>

