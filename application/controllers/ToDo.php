<?php

/* if (  ! defined('basepath')) exit('no direct script acces allowed') */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ToDo
 * @property Todomodel $todoModel
 * @author adminSio
 */
class ToDo extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('todoModel');
        $this->load->library('form_validation');
                $this->load->helper('form');
    }
    public function index() {
        
        $all_todos=array();
        $all_todos=$this->todoModel->get_all();

        $data=array();
        $data['title']="au boulot !";
        $data['todos']=$all_todos;
        $this->load->view('Todoindex',$data);
    }

    public function add(){
    //put your code here
        
    $this->form_validation->set_rules('ordre','ordre','required|numeric');
    $this->form_validation->set_rules('task','tache','required|max_length[60]');
    if ($this->form_validation->run()==true)
    {
        $task=$this->input->post('task');
        $ordre=$this->input->post('ordre');

        $params=array('task'=>$task,'ordre'=>$ordre,'completed'=>0);

        $this->todoModel->add($params);
        redirect(base_url('ToDo/index'));
    }
    else
    {
        $this->load->view('TodoAdd') ;                                           
    }
}


    public function update(){
    //put your code here
        
    $this->form_validation->set_rules('ordre','ordre','required|numeric');
    $this->form_validation->set_rules('task','tache','required|max_length[60]');
    if ($this->form_validation->run()==true)
    {
        $task=$this->input->post('task');
        $ordre=$this->input->post('ordre');
        $id=$this->input->post('id');

        $params=array('task'=>$task,'ordre'=>$ordre,'completed'=>0);

        $this->todoModel->update($id,$params);
        redirect(base_url('ToDo/index'));
    }
    else
    {
        $this->load->view('TodoUpdate') ;                                           
    }
}

    public function fait($id){
        if("completed"===0){
        $params=array("completed"=>1);
                $this->todoModel->update($id,$params);
                redirect(base_url('ToDo/index'));
        }
        else{
        $params=array("completed"=>1);
                $this->todoModel->update($id,$params);
                redirect(base_url('ToDo/index'));
        }
    }
    
        public function pasfait($id){
        if("completed"===0){
        $params=array("completed"=>0);
                $this->todoModel->update($id,$params);
                redirect(base_url('ToDo/index'));
        }
        else{
        $params=array("completed"=>0);
                $this->todoModel->update($id,$params);
                redirect(base_url('ToDo/index'));
        }
}

        }