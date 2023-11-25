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

    <?php if(isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
    
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
                <span id="nikhelp" class="form-text text-muted"></span>
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="form-control">
                <span id="namahelp" class="form-text text-muted"></span>
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
                <span id="alamathelp" class="form-text text-muted"></span>
              </div>
              <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="number" name="no_telepon" id="no_telepon" class="form-control">
                <span id="no_teleponhelp" class="form-text text-muted"></span>
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
                <span id="bankhelp" class="form-text text-muted"></span>
              </div>
              <div class="form-group">
                <label for="no_rekening">Nomor Rekening</label>
                <input type="number" id="no_rekening" name="no_rekening" class="form-control">
                <span id="no_rekeninghelp" class="form-text text-muted"></span>
              </div>
              <div class="form-group">
                <label for="nomorrekening">Gaji Pokok</label>
                <input type="text" id="gaji" name="gaji" class="form-control">
                <span id="gajihelp" class="form-text text-muted"></span>
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
                      <option value="" disabled selected>Pilih status karyawan..</option>
                      <option value="AKTIF">Aktif</option>
                      <option value="CUTI">Cuti</option>
                      <option value="OUTBOUND">Tugas Keluar</option>
                      <option value="SUSPENDED">Keluar / Diskors</option>
                  </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="/karyawan" class="btn btn-secondary">Batal</a>
          <button id="submit-button" type="submit" class="btn btn-success float-right">Submit Data Karyawan</button>
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
  var validator = $('#tambahkaryawan').validate({
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

    if ($('#tambahkaryawan').valid()) {
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
          $('#tambahkaryawan').submit();

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
    }
  });
});

/*
function checkEmpty(input) {
    var helpText = document.getElementById(input.id + 'help');
    if (input.value === '') {
        helpText.textContent = 'Kolom ini wajib diisi.';
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
    } else {
        helpText.textContent = '';
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    }
}
*/

/*
$(document).ready(function () {
  $('#tambahkaryawan').validate({
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
        number: true
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
        number: "Harap isi menggunakan angka"
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
});
*/

/*
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
            this.submit();

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
});*/
</script>