<?php echo form_open_multipart('setting');

if ($this->session->flashdata('pesan')) {
  echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
  echo $this->session->flashdata('pesan');
  echo '</div>';
}
?>

<div class="col-sm-4">
  <label for="">Foto Kepala Sekolah</label><br>
  <img src="<?= base_url('assets/foto_kepsek/' . $setting->foto_kepsek) ?>" width="200px" height="200px">
  <br>
  <div class="form-group">
    <br>
    <label>Ganti Foto</label>
    <input class="form-control" type="file" name="foto_kepsek">
  </div>
</div>

<div class="col-sm-8">
  <div class="form-group">
    <label>Nama Sekolah</label>
    <input class="form-control" value="<?= $setting->nama_sekolah ?>" type="text" name="nama_sekolah">
  </div>
  <div class="form-group">
    <label>Alamat Sekolah</label>
    <textarea class="form-control" name="alamat" id="" cols="5" rows="5"><?= $setting->alamat ?></textarea>
  </div>
  <div class="form-group">
    <label>No Telepon</label>
    <input class="form-control" value="<?= $setting->no_telpon ?>" type="text" name="no_telpon">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input class="form-control" value="<?= $setting->email ?>" type="text" name="email">
  </div>
  <div class="form-group">
    <label>Kepala Sekolah</label>
    <input class="form-control" value="<?= $setting->kepala_sekolah ?>" type="text" name="kepala_sekolah">
  </div>
  <div class="form-group">
    <label>NIP</label>
    <input class="form-control" value="<?= $setting->nip ?>" type="text" name="nip">
  </div>
</div>

<div class="col-sm-12">
  <div class="form-group">
    <label>Sejarah Sekolah</label>
    <textarea name="sejarah" id="editor"><?= $setting->sejarah ?></textarea>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Visi</label>
    <textarea class="form-control" name="visi" id="" cols="5" rows="5"><?= $setting->visi ?></textarea>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Misi</label>
    <textarea class="form-control" name="misi" id="" cols="5" rows="5"><?= $setting->misi ?></textarea>
  </div>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-success"><i class="fa fw fa-save"></i> Update</button>
</div>

<?php echo form_close(); ?>