<!-- /.col-lg-4 -->
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
      <?php
      echo validation_errors('<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

      if (isset($error_upload)) {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
      }

      echo form_open_multipart('siswa/edit/' . $siswa->id_siswa);
      ?>
      <div class="form-group">
        <label>NIS</label>
        <input class="form-control" value="<?= $siswa->nis ?>" type="text" name="nis" required>
      </div>
      <div class="form-group">
        <label>Nama Siswa</label>
        <input class="form-control" value="<?= $siswa->nama_siswa ?>" type="text" name="nama_siswa" required>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input class="form-control" value="<?= $siswa->tempat_lahir ?>" type="text" name="tempat_lahir" required>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input class="form-control" value="<?= $siswa->tgl_lahir ?>" type="date" name="tgl_lahir" required>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Kelas</label>
          <select name="kelas" class="form-control">
            <option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Foto Siswa</label>
          <div>
            <img src="<?= base_url('assets/foto_siswa/' . $siswa->foto_siswa) ?>" width="120px" class="img-thumbnail">
          </div>
          <input class="form-control" type="file" name="foto_siswa">
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