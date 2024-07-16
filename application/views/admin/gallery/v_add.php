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

      echo form_open_multipart('gallery/add');
      ?>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Nama Gallery</label>
          <input class="form-control" type="text" name="nama_gallery" placeholder="Silahkan isi Nama Gallery" required>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <label>Sampul</label>
          <input class="form-control" type="file" name="sampul" required>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('gallery') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>