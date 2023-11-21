<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    public $table = 'user';
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
        
        $q = $this->db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $cek = $q -> num_rows();
        return $cek;
    }

    public function user_login($email, $password)
    {
        
        $q = $this->db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $data = $q -> result_array();
        return $data;
    }

    public function register($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getId($email)
    {
        $this->db->from($this->table);
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result_array();
    }
}