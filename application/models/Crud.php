<?php

class Crud extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->db = $this->load->database('default', true);
  }
  public function get_all_users()
  {
    $query = $this->db->get('users');
    return $query->result();
  }
}
