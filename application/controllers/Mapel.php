<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_mapel');
  }

  public function index()
  {
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-book fa-fw"></i> Mata Pelajaran',
      'mapel' => $this->m_mapel->lists(),
      'isi' => 'admin/mapel/v_list'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function add()
  {
    $this->form_validation->set_rules('nama_mapel', 'Nama Pelajaran', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data = array(
        'title' => 'SMAN 1 Bekasi',
        'title2' => '<i class="fa fa-fw fa-plus"></i> Add Mata Pelajaran',
        'isi' => 'admin/mapel/v_add'
      );
      $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    } else {
      $data = array(
        'nama_mapel' => $this->input->post('nama_mapel')
      );
      $this->m_mapel->add($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!!');
      redirect('mapel');
    }
  }

  public function edit($id_mapel)
  {
    $this->form_validation->set_rules('nama_mapel', 'Nama Pelajaran', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data = array(
        'title' => 'SMAN 1 Bekasi',
        'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Mata Pelajaran',
        'mapel' => $this->m_mapel->detail($id_mapel),
        'isi' => 'admin/mapel/v_edit'
      );
      $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    } else {
      $data = array(
        'id_mapel' => $id_mapel,
        'nama_mapel' => $this->input->post('nama_mapel')
      );
      $this->m_mapel->edit($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!');
      redirect('mapel');
    }
  }

  public function delete($id_mapel)
  {
    $data = array(
      'id_mapel' => $id_mapel,
    );
    $this->m_mapel->delete($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!');
    redirect('mapel');
  }
}
