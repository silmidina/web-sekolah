<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_siswa');
  }


  public function index()
  {
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-graduation-cap"></i> Data Siswa',
      'siswa' => $this->m_siswa->lists(),
      'isi' => 'admin/siswa/v_list'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function add()
  {
    $this->form_validation->set_rules('nis', 'NIS', 'required');
    $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/foto_siswa/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto_siswa')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-plus"></i> Add Data Siswa',
          'error' => $this->upload->display_errors(),
          'isi' => 'admin/siswa/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/foto_siswa/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);

        $data = array(
          'nis' => $this->input->post('nis'),
          'nama_siswa' => $this->input->post('nama_siswa'),
          'tempat_lahir' => $this->input->post('tempat_lahir'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'kelas' => $this->input->post('kelas'),
          'foto_siswa' => $upload_data['uploads']['file_name'],
        );
        $this->m_siswa->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
        redirect('siswa');
      }
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-plus"></i> Add Data Siswa',
      'isi' => 'admin/siswa/v_add'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function edit($id_siswa)
  {
    $this->form_validation->set_rules('nis', 'NIS', 'required');
    $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/foto_siswa/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto_siswa')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Data Siswa',
          'error' => $this->upload->display_errors(),
          'siswa' => $this->m_siswa->detail($id_siswa),
          'isi' => 'admin/siswa/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/foto_siswa/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
        //Menghapus file foto lama
        $siswa = $this->m_siswa->detail($id_siswa);
        if ($siswa->foto_siswa != "") {
          unlink('assets/foto_siswa/' . $siswa->foto_siswa);
        }
        //End menghapus file foto lama

        $data = array(
          'id_siswa' => $id_siswa,
          'nis' => $this->input->post('nis'),
          'nama_siswa' => $this->input->post('nama_siswa'),
          'tempat_lahir' => $this->input->post('tempat_lahir'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'kelas' => $this->input->post('kelas'),
          'foto_siswa' => $upload_data['uploads']['file_name'],
        );
        $this->m_siswa->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('siswa');
      }
      $upload_data = array('uploads' => $this->upload->data());
      $config['image_library'] = 'gd2';
      $config['source_image'] = 'assets/foto_siswa/' . $upload_data['uploads']['file_name'];
      $this->load->library('image_lib', $config);

      $data = array(
        'id_siswa' => $id_siswa,
        'nis' => $this->input->post('nis'),
        'nama_siswa' => $this->input->post('nama_siswa'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'kelas' => $this->input->post('kelas'),

      );
      $this->m_siswa->edit($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
      redirect('siswa');
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-fw fa-pencil"></i> Edit Data Siswa',
      'siswa' => $this->m_siswa->detail($id_siswa),
      'isi' => 'admin/siswa/v_edit'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function delete($id_siswa)
  {
    //Menghapus file foto lama
    $siswa = $this->m_siswa->detail($id_siswa);
    if ($siswa->foto_siswa != "") {
      unlink('assets/foto_siswa/' . $siswa->foto_siswa);
    }
    //End menghapus file foto lama

    $data = array(
      'id_siswa' => $id_siswa,
    );
    $this->m_siswa->delete($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!');
    redirect('siswa');
  }
}
