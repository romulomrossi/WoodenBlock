<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class TarefaModel extends CI_Model {

    function __construct() 
    {
        parent::__construct();
        $this->table = 'Task';
    }

    function Insert($data) 
    {
        if(!isset($data))
            return false;
        return $this->db->insert($this->table, $data);
        
    }

    function GetId(){
        $tb = 'Users';
        $query = $this->db->get($tb);

        if ($query->num_rows() > 0) 
            return $query->row_array();
        else
            return null;
    }

    function GetAll($sort = 'idTask', $order = 'asc') {
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