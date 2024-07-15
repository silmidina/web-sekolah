<!-- /.col-lg-4 -->
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
      <?php
      if (isset($error_upload)) {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
      }

      echo form_open_multipart('siswa/add');
      ?>
      <div class="form-group">
        <label>NIS</label>
        <input class="form-control" type="text" name="nis" placeholder="Silahkan isi Nis" required>
      </div>
      <div class="form-group">
        <label>Nama Siswa</label>
        <input class="form-control" type="text" name="nama_siswa" placeholder="Silahkan isi Nama Siswa" required>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input class="form-control" type="text" name="tempat_lahir" placeholder="Silahkan isi Tempat Lahir" required>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input class="form-control" type="date" name="tgl_lahir" required>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Kelas</label>
          <select name="kelas" class="form-control">
            <option value="">-Pilih Kelas-</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Foto Siswa</label>
          <input class="form-control" type="file" name="foto_siswa" required>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('siswa') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>