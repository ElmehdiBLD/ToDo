<?php

if (!defined('BASEPATH'))
    exit('no direct script acces allowed');

class Todomodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_By_Id($id) {
        return $this->db->get_where('todo',array('id'=>$id))->row_array();
    }

    function get_all() {
        return $this->db->get('todo')->result_array();
    }

    function add($params) {
        $this->db->insert('todo',$params);
        return $this->db->insert_id();
    }

    function update($id,$params) {
        $this->db->where('id',$id);
        $this->db->update('todo',$params);
    }

    function delete($id) {
        $this->db->delete('todo',array('id'=>$id));
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *  @property CI_db fdb
 */

