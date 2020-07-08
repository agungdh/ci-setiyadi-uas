<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Mata Kuliah</h3>
          </div>
          <!-- /.card-header -->

            <div class="card-body">
              <a href="<?php echo base_url() . 'matakuliah/tambah' ?>">
                <button class="btn btn-success">
                  <i class="fa fa-plus"></i>Tambah
                </button>
              </a>
              <br>
              <br>
              <table id="tabel" class="table table-bordered table-striped table-hover" style="width: 100%">
                <thead>
                  <tr>
                    <th>Kode MK</th>
                    <th>Mata Kuliah</th>
                    <th>Jumlah SKS</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $value->kodemk; ?></td>
                      <td><?php echo $value->nama; ?></td>
                      <td><?php echo $value->jumlahsks; ?></td>
                      <td>
                        <a href="<?php echo base_url() . 'matakuliah/ubah/' . $value->id; ?>">
                          <button type="button" class="btn btn-primary">Ubah</button>
                        </a>
                        <a href="<?php echo base_url() . 'matakuliah/aksi_hapus/' . $value->id; ?>">
                          <button type="button" class="btn btn-primary">Hapus</button>
                        </a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
  </div>
  <!-- /.row -->
</section>

<script type="text/javascript">
  $(function() {
    $("#tabel").DataTable();
  });
</script>