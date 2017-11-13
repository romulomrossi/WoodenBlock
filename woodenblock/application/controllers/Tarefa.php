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
        $tarefa = $this->TarefaModel->GetAll();
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
    private function Validate($operation = 'create')
        {
            switch($operation)
            {
                case 'create':
                    $rules['title'] = array('trim', 'required');
                    $rules['descricao'] = array('trim', 'required');
                    $rules['status'] = array('trim', 'required');
                    $rules['image'] = array('trim', 'required');
                    $rules['area'] = array('trim', 'required');
                    $rules['value'] = array('trim', 'required');
                    $rules['observacao'] = array('trim', 'required');
                    $rules['prazo'] = array('trim', 'required');
                    break;
 
            }

            $this->form_validation->set_rules('name', 'Título', $rules['title']);
            $this->form_validation->set_rules('descricao', 'Descrição', $rules['descricao']);
            $this->form_validation->set_rules('prazo', 'Prazo', $rules['prazo']);
            $this->form_validation->set_rules('status', 'Status', $rules['status']);
            $this->form_validation->set_rules('value', 'Valor', $rules['value']);
            $this->form_validation->set_rules('image', 'Imagem', $rules['image']);
            $this->form_validation->set_rules('area', 'Área', $rules['area']);
            $this->form_validation->set_rules('observacao', 'Observações', $rules['observacao']);
            return $this->form_validation->run();
        }

}
