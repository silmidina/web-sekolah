<!-- /.col-lg-4 -->
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
      <?php

      echo form_open_multipart('mapel/add');
      ?>
      <div class="form-group">
        <label>Mata Pelajaran</label>
        <input class="form-control" type="text" name="nama_mapel" placeholder="Silahkan isi Mata Pelajaran" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('mapel') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>