<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?php echo base_url() . 'matakuliah/aksi_tambah' ?>" method="post">
            <div class="card-body">

              <?php
              $error = form_error('nama') ? 'is-invalid' : null;
              $message = form_error('nama') ? form_error('nama', ' ', ' ') : '';
              ?>
              <div class="form-group">
                <div data-toggle="tooltip" data-placement="top" title="<?php echo $message; ?>">
                  <label for="nama">Nama MK</label>
                  <input type="text" name="nama" placeholder="Nama MK" class="form-control <?php echo $error; ?>" id="nama" value="<?php echo set_value('nama'); ?>">
                </div>
              </div>

              <?php
              $error = form_error('kodemk') ? 'is-invalid' : null;
              $message = form_error('kodemk') ? form_error('kodemk', ' ', ' ') : '';
              ?>
              <div class="form-group">
                <div data-toggle="tooltip" data-placement="top" title="<?php echo $message; ?>">
                  <label for="kodemk">Kode MK</label>
                  <input type="text" name="kodemk" placeholder="Kode MK" class="form-control <?php echo $error; ?>" id="kodemk" value="<?php echo set_value('kodemk'); ?>">
                </div>
              </div>

              <?php
              $error = form_error('jumlahsks') ? 'is-invalid' : null;
              $message = form_error('jumlahsks') ? form_error('jumlahsks', ' ', ' ') : '';
              ?>
              <div class="form-group">
                <div data-toggle="tooltip" data-placement="top" title="<?php echo $message; ?>">
                  <label for="jumlahsks">Jumlah SKS</label>
                  <input min="1" type="number" name="jumlahsks" placeholder="Kode MK" class="form-control <?php echo $error; ?>" id="jumlahsks" value="<?php echo set_value('jumlahsks'); ?>">
                </div>
              </div>

            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="<?php echo base_url() . 'matakuliah'; ?>"><button type="button" class="btn btn-primary">Kembali</button></a>
            </div>
      </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>