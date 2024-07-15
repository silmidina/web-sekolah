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
      echo validation_errors('<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

      echo form_open_multipart('berita/add');
      ?>
      <div class="form-group">
        <label>Judul Berita</label>
        <input class="form-control" type="text" name="judul_berita" placeholder="Silahkan isi Judul Berita" required>
      </div>

      <div class="form-group">
        <label>Foto Berita</label>
        <input class="form-control" type="file" name="gambar_berita" required>
      </div>

      <div class="form-group">
        <label>Isi Berita</label>
        <textarea name="isi_berita" id="editor"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('berita') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>