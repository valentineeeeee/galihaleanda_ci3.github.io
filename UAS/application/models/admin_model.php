<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
    public $table = 'admin';
	public function __construct()
	{
		parent::__construct();
	}
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function check_login($email, $password)
    {
        
        $q = $this->db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        $cek = $q -> num_rows();
        return $cek;
    }

    public function user_login($email, $password)
    {
        
        $q = $this->db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        $data = $q -> result_array();
        return $data;
    }
}