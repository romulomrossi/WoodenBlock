<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('tarefa');
    }


    public function Create()
    {
        //$tarefa = $this->TarefaModel->GetAll();
        $validation = self::Validate();
        if($validation)
        {
            $tarefa = $this->input->post();

            $status = $this->TarefaModel->Insert($tarefa);
            if(!$status)
            {
                $this->session->set_flashdata('error', 'Não foi possível inserir a tarefa.');
                $this->load->view('tarefa');                        
            }
            else
            {
                $this->session->set_flashdata('success', 'Tarefa inserida com sucesso.');// Redireciona o usuário para o perfil
                $this->load->view('profile');
            }
        }   
        else
        {
            $this->session->set_flashdata('error', validation_errors('<p>', '</p>'));
            $this->load->view('tarefa');        
        }
    
    }  
    public function validaDate($data){
            $data_atual = date('Y-m-d');

            if($data_atual < $data) 
                return true;
            
            $this->form_validation->set_message('validaDate', ' A {field} deve ser maior que a data atual!');
            return false;
            
    }    


    private function Validate($operation = 'create')
    {       
            switch($operation)
            {
                case 'create':
                    $rules['name'] = array('trim', 'required');
                    $rules['description'] = array('trim', 'required');
                    $rules['comments'] = array('trim', 'required');
                    $rules['endTime'] = array('trim', 'required','callback_validaDate');
                    break;
            }

            $this->form_validation->set_rules('name', 'Título', $rules['name']);
            $this->form_validation->set_rules('description', 'Descrição', $rules['description']);
            $this->form_validation->set_rules('comments', 'Observações', $rules['comments']);
            $this->form_validation->set_rules('endTime','Data de disponibilidade',$rules['endTime']);
            return $this->form_validation->run();
        }

}