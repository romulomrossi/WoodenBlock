<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsersModel extends CI_Model {

    function __construct() 
    {
        parent::__construct();
        $this->table = 'Users';
    }

    function Insert($data) 
    {
        if(!isset($data))
            return false;
        return $this->db->insert($this->table, $data);
    }

    function GetByEmail($email)
    {
      
      $this->db->where('email', $email);
      $query = $this->db->get($this->table);
      
        if ($query->num_rows() > 0) 
            return $query->row_array();
        else
            return null;
      
    }

    function GetAll($sort = 'idUser', $order = 'asc') {
        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        } 
        else
        {
            return null;
        }
    }
}