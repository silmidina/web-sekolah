<!-- Custom CSS -->
<style>
  .panel-info>.panel-heading {
    background-color: #17a2b8;
    color: #fff;
  }
</style>




<!-- /.col-lg-4 -->
<div class="col-lg-12">
  <div class="panel panel-info">
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

      if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
      }

      echo form_open_multipart('gallery/add_foto/' . $gallery->id_gallery);
      ?>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Keterangan Foto</label>
          <input class="form-control" type="text" name="ket_foto" placeholder="Silahkan isi Keterangan Foto" required>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <label>Foto</label>
          <input class="form-control" type="file" name="foto" required>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('gallery') ?>" class="btn btn-warning"> <i class="fa fw fa-reply"></i> Kembali</a>
      </div>

      <?php echo form_close(); ?>
      <hr>

      <?php foreach ($foto as $key => $value) { ?>
        <div class="col-sm-3 text-center">
          <label><?= $value->ket_foto ?></label>
          <img src="<?= base_url('assets/foto/' . $value->foto) ?>" width="250px" height="210px">
          <br>
          <a href="<?= base_url('gallery/delete_foto/' . $value->id_gallery . '/' . $value->id_foto) ?>" class="btn btn-danger btn-xs btn-block" onclick="return confirm('Apakah Data Ini Akan Dihapus...?' )"><i class="fa fa-trash"></i></a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>