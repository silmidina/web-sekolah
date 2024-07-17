<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
  public function download()
  {
    $this->db->select('*');
    $this->db->from('tbl_file');
    $this->db->order_by('id_file', 'desc');
    return $this->db->get()->result();
  }

  public function get_file($id_file)
  {
    $this->db->select('*');
    $this->db->from('tbl_file');
    $this->db->where('id_file', $id_file);
    return $this->db->get()->row();
  }

  public function guru()
  {
    $this->db->select('*');
    $this->db->from('tbl_guru');
    $this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel', 'left');
    $this->db->order_by('id_guru', 'desc');
    return $this->db->get()->result();
  }

  public function berita($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('tbl_berita');
    $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
    $this->db->order_by('id_berita', 'desc');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
  }

  public function total_berita()
  {
    $this->db->select('*');
    $this->db->from('tbl_berita');
    $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
    $this->db->order_by('id_berita', 'desc');
    return $this->db->get()->result();
  }
}
