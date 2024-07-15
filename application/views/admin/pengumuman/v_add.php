<!-- /.col-lg-4 -->
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
      <?php

      echo form_open_multipart('pengumuman/add');
      ?>
      <div class="form-group">
        <label>Judul Pengumuman</label>
        <input class="form-control" type="text" name="judul_pengumuman" placeholder="Silahkan isi Judul Pengumuman" required>
      </div>
      <div class="form-group">
        <label>Isi Pengumuman</label>
        <textarea class="form-control" name="isi_pengumuman" id="" cols="30" rows="10" placeholder="Silahkan Isi Pengumuman" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('pengumuman') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>