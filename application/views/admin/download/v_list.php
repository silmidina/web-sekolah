<!-- /.col-lg-4 -->
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <a href="<?= base_url('download/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
    </div>
    <div class="panel-body">
      <?php
      if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
      }
      ?>
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>No</th>
            <th>Keterangan</th>
            <th>File</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($download as $key => $value) { ?>
            <tr>
              <td width="20px"><?= $no++; ?></td>
              <td><?= $value->ket_file; ?></td>
              <td><?= $value->file; ?></td>


              <td>
                <a href="<?= base_url('download/edit/' . $value->id_file) ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                <a href="<?= base_url('download/delete/' . $value->id_file) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus...?' )" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php  } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>