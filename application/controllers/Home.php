<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_home');
    $this->load->model('m_guru');
    $this->load->helper('download'); // Pastikan helper download dimuat
  }

  public function index()
  {
    $data = array(
      'title' => 'Web Sekolah',
      'berita' => $this->m_home->slider_berita(),
      'guru' => $this->m_guru->lists(),
      'isi' => 'v_home'
    );
    $this->load->view('layout/v_wrapperhome', $data, FALSE);
  }

  public function download()
  {
    $data = array(
      'title' => 'Download',
      'download' => $this->m_home->download(),
      'isi' => 'v_download'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function download_file($id_file)
  {
    $file_data = $this->m_home->get_file($id_file);
    if ($file_data) {
      $data = file_get_contents('assets/file/' . $file_data->file); // Baca konten file
      force_download($file_data->file, $data); // Unduh file
    } else {
      show_404();
    }
  }

  public function guru()
  {
    $data = array(
      'title' => 'Guru',
      'guru' => $this->m_home->guru(),
      'isi' => 'v_guru'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function berita()
  {
    $this->load->library('pagination');
    $config['base_url'] = base_url('home/berita');
    $config['total_rows'] = count($this->m_home->total_berita());
    $config['per_page'] = 8;
    $config['uri_segmen'] = 3;
    //start dan limit
    $limit = $config['per_page'];
    $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
    //------------------------------
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';
    $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a>';
    $config['cur_tag_close'] = '<a></li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['firts_tag_open'] = '<li>';
    $config['firts_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['full_tag_close'] = '</ul></div>';
    //------------------------------------------
    $this->pagination->initialize($config);

    $data = array(
      'paginasi' => $this->pagination->create_links(),
      'latest_berita' => $this->m_home->latest_berita(),
      'title' => 'Berita',
      'berita' => $this->m_home->berita($limit, $start),
      'isi' => 'v_berita'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function detail_berita($slug_berita)
  {
    $data = array(
      'title' => 'Detail Berita',
      'berita' => $this->m_home->detail_berita($slug_berita),
      'latest_berita' => $this->m_home->latest_berita(),
      'isi' => 'v_detail_berita'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function gallery()
  {
    $data = array(
      'title' => 'Gallery Foto',
      'gallery' => $this->m_home->gallery(),
      'isi' => 'v_gallery'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function detail_gallery($id_gallery)
  {
    $data = array(
      'title' => 'Detail Gallery Foto',
      'gallery' => $this->m_home->detail_gallery($id_gallery),
      'nama_gallery' => $this->m_home->nama_gallery($id_gallery),
      'isi' => 'v_detail_gallery'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function siswa()
  {
    $data = array(
      'title' => 'Siswa',
      'siswa' => $this->m_home->siswa(),
      'isi' => 'v_siswa'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function profile()
  {
    $data = array(
      'title' => 'Profile Sekolah',
      'sekolah' => $this->m_setting->detail(),
      'isi' => 'v_profile'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function about()
  {
    $data = array(
      'title' => 'About Sekolah',
      'sekolah' => $this->m_setting->detail(),
      'isi' => 'v_about'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }
}
