<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_download');
  }
  public function index()
  {
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-download"></i> Data File Download',
      'download' => $this->m_download->lists(),
      'isi' => 'admin/download/v_list'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function add()
  {
    $this->form_validation->set_rules('ket_file', 'Keterangan File', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/file/';
      $config['allowed_types'] = 'doc|docx|ppt|pptx|pdf|txt';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-plus"></i> Add Data File',
          'error_upload' => 'File Tidak Sesuai Format!!!',
          //'file' => $this->m_download->lists(),
          'isi' => 'admin/download/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/file/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);

        $data = array(
          'ket_file' => $this->input->post('ket_file'),
          'file' => $upload_data['uploads']['file_name'],
        );
        $this->m_download->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
        redirect('download');
      }
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-plus"></i> Add Data File',
      //'mapel' => $this->m_download->lists(),
      'isi' => 'admin/download/v_add'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function edit($id_file)
  {
    $this->form_validation->set_rules('ket_file', 'Keterangan File', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/file/';
      $config['allowed_types'] = 'doc|docx|ppt|pptx|pdf|txt';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Data File',
          'download' => $this->m_download->detail($id_file),
          'error_upload' => 'File Tidak Sesuai Format!!!',
          //'file' => $this->m_download->lists(),
          'isi' => 'admin/download/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        //Menghapus file lama
        $download = $this->m_download->detail($id_file);
        if ($download->file != "") {
          unlink('assets/file/' . $download->file);
        }
        //End menghapus file lama

        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/file/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);

        $data = array(
          'id_file' => $id_file,
          'ket_file' => $this->input->post('ket_file'),
          'file' => $upload_data['uploads']['file_name'],
        );
        $this->m_download->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('download');
      }
       //end menghapus foto
      $data = array(
        'id_file' => $id_file,
        'ket_file' => $this->input->post('ket_file'),
      );
      $this->m_download->edit($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
      redirect('download');
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Data File',
      'download' => $this->m_download->detail($id_file),
      //'mapel' => $this->m_download->lists(),
      'isi' => 'admin/download/v_edit'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function delete($id_file)
  {
    //Menghapus file lama
    $download = $this->m_download->detail($id_file);
    if ($download->file != "") {
      unlink('assets/file/' . $download->file);
    }
    //End menghapus file lama

    $data = array(
      'id_file' => $id_file,
    );
    $this->m_download->delete($data);
    $this->session->set_flashdata('pesan', 'Data File Berhasil Dihapus!!');
    redirect('download');
  }
}
