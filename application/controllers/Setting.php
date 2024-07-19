<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

  public function index()
  {
    $this->form_validation->set_rules('nip', 'NIP', 'required');
    $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('no_telpon', 'No Telepon', 'required');
    $this->form_validation->set_rules('kepala_sekolah', 'Kepala Sekolah', 'required');
    $this->form_validation->set_rules('sejarah', 'Sejarah', 'required');
    $this->form_validation->set_rules('visi', 'Visi', 'required');
    $this->form_validation->set_rules('misi', 'Misi', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');

    if ($this->form_validation->run() == TRUE or FALSE) {
      $config['upload_path'] = 'assets/foto_kepsek/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = 2000;
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto_kepsek')) {
        $data = array(
          'title' => 'SMAN 1 Bekasi',
          'title2' => '<i class="fa fa-gear fa-fw"></i> Setting Web Sekolah',
          'setting' => $this->m_setting->detail(),
          'isi' => 'admin/v_setting'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/foto_kepsek/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
        //Menghapus file foto lama
        $setting = $this->m_setting->detail();
        if ($setting->foto_kepsek != "") {
          unlink('assets/foto_kepsek/' . $setting->foto_kepsek);
        }
        //End menghapus file foto lama

        $data = array(
          'id' => 1,
          'nip' => $this->input->post('nip'),
          'nama_sekolah' => $this->input->post('nama_sekolah'),
          'alamat' => $this->input->post('alamat'),
          'no_telpon' => $this->input->post('no_telpon'),
          'kepala_sekolah' => $this->input->post('kepala_sekolah'),
          'sejarah' => $this->input->post('sejarah'),
          'visi' => $this->input->post('visi'),
          'misi' => $this->input->post('misi'),
          'email' => $this->input->post('email'),
          'foto_kepsek' => $upload_data['uploads']['file_name'],
        );
        $this->m_setting->save_setting($data);
        $this->session->set_flashdata('pesan', 'Settingan Web Berhasil Diupdate!!');
        redirect('setting');
      }
      $data = array(
        'id' => 1,
        'nip' => $this->input->post('nip'),
        'nama_sekolah' => $this->input->post('nama_sekolah'),
        'alamat' => $this->input->post('alamat'),
        'no_telpon' => $this->input->post('no_telpon'),
        'kepala_sekolah' => $this->input->post('kepala_sekolah'),
        'sejarah' => $this->input->post('sejarah'),
        'visi' => $this->input->post('visi'),
        'misi' => $this->input->post('misi'),
        'email' => $this->input->post('email'),

      );
      $this->m_setting->save_setting($data);
      $this->session->set_flashdata('pesan', 'Settingan Web Berhasil Diupdate!!');
      redirect('setting');
    }
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-gear fa-fw"></i> Setting Web Sekolah',
      'setting' => $this->m_setting->detail(),
      'isi' => 'admin/v_setting'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }
}

/* End of file Setting.php */
