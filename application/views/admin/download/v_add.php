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

      echo form_open_multipart('download/add');
      ?>
      <div class="form-group">
        <label>Keterangan File</label>
        <input class="form-control" type="text" name="ket_file" placeholder="Silahkan isi Keterangan File" required>
      </div>

      <div class="form-group">
        <label>File</label>
        <input class="form-control" type="file" name="file" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('download') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>