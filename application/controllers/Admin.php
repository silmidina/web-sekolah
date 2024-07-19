<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_setting');
  }


  public function index()
  {
    $data = array(
      'title' => 'SMAN 1 Bekasi',
      'title2' => '<i class="fa fa-dashboard fa-fw"></i> Dashboard',
      'isi' => 'admin/v_home'
    );
    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }
}

/* End of file Home.php */
