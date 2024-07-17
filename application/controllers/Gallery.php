<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_gallery');
  }
  public function index()
  {
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-picture-o"></i> Gallery Foto',
      'gallery' => $this->m_gallery->lists(),
      'isi' => 'admin/gallery/v_list'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function add()
  {
    $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/sampul/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sampul')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-plus"></i> Add Gallery Foto',
          'error' => $this->upload->display_errors(),
          'isi' => 'admin/gallery/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/sampul/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);

        $data = array(
          'nama_gallery' => $this->input->post('nama_gallery'),
          'sampul' => $upload_data['uploads']['file_name']
        );
        $this->m_gallery->add($data);
        $this->session->set_flashdata('pesan', 'Gallery Berhasil Disimpan');
        redirect('gallery');
      }
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-plus"></i> Add Gallery Foto',
      'isi' => 'admin/gallery/v_add'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function edit($id_gallery)
  {
    $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/sampul/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sampul')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Gallery Foto',
          'error' => $this->upload->display_errors(),
          'gallery' => $this->m_gallery->detail($id_gallery),
          'isi' => 'admin/gallery/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/sampul/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
        //Menghapus file foto lama
        $gallery = $this->m_gallery->detail($id_gallery);
        if ($gallery->sampul != "") {
          unlink('assets/sampul/' . $gallery->sampul);
        }
        //End menghapus file foto lama

        $data = array(
          'id_gallery' => $id_gallery,
          'nama_gallery' => $this->input->post('nama_gallery'),
          'sampul' => $upload_data['uploads']['file_name']
        );
        $this->m_gallery->edit($data);
        $this->session->set_flashdata('pesan', 'Gallery Berhasil Disimpan');
        redirect('gallery');
      }
      //end menghapus foto
      $data = array(
        'id_gallery' => $id_gallery,
        'nama_gallery' => $this->input->post('nama_gallery'),

      );
      $this->m_gallery->edit($data);
      $this->session->set_flashdata('pesan', 'Gallery Berhasil Disimpan');
      redirect('gallery');
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Gallery Foto',
      'gallery' => $this->m_gallery->detail($id_gallery),
      'isi' => 'admin/gallery/v_edit'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function delete($id_gallery)
  {
    //Menghapus file foto lama
    $gallery = $this->m_gallery->detail($id_gallery);
    if ($gallery->sampul != "") {
      unlink('assets/sampul/' . $gallery->sampul);
    }
    //End menghapus file foto lama

    $data = array(
      'id_gallery' => $id_gallery,
    );
    $this->m_gallery->delete($data);
    $this->session->set_flashdata('pesan', 'Gallery Berhasil Dihapus!!');
    redirect('gallery');
  }

  public function add_foto($id_gallery)
  {
    $this->form_validation->set_rules('ket_foto', 'Ket Foto', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/foto/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto')) {
        $gallery = $this->m_gallery->detail($id_gallery);
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-plus"></i> Add Foto Gallery : ' . $gallery->nama_gallery,
          'error' => $this->upload->display_errors(),
          'foto' => $this->m_gallery->lists_foto($id_gallery),
          'gallery' => $gallery,
          'isi' => 'admin/gallery/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/foto/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);

        $data = array(
          'id_gallery' => $id_gallery,
          'ket_foto' => $this->input->post('ket_foto'),
          'foto' => $upload_data['uploads']['file_name']
        );
        $this->m_gallery->add_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan!');
        redirect('gallery/add_foto/' . $id_gallery);
      }
    }
    $gallery = $this->m_gallery->detail($id_gallery);
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-plus"></i> Add Foto Gallery : ' . $gallery->nama_gallery,
      'gallery' => $gallery,
      'foto' => $this->m_gallery->lists_foto($id_gallery),
      'isi' => 'admin/gallery/v_add_foto'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function delete_foto($id_gallery, $id_foto)
  {
    //Menghapus file foto lama
    $foto = $this->m_gallery->detail_foto($id_foto);
    if ($foto->foto != "") {
      unlink('assets/foto/' . $foto->foto);
    }
    //End menghapus file foto lama

    $data = array(
      'id_foto' => $id_foto,
    );
    $this->m_gallery->delete_foto($data);
    $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus!!');
    redirect('gallery/add_foto/' . $id_gallery);
  }
}

/* End of file Gallery.php */
