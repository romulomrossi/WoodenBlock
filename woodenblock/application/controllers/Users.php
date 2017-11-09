<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

    public function index()
    {
        $this->load->view('register');
    }

    public function Create()
    {
        $validation = self::Validate();
        if($validation)
        {
            $user = $this->input->post();
            $this->session->set_flashdata('error', 'Não tem erro porra');
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors('<p>', '</p>'));
        }
        $this->load->view('register');        
    }

    private function Validate($operation = 'create')
    {
        switch($operation)
        {
            case 'create':
                $rules['firstName'] = array('trim', 'required', 'min_lenght[3]');
                $rules['lastName'] = array('trim', 'required', 'min_lenght[3]');
                $rules['email'] = array('trim', 'required', 'valid_email');
                $rules['password'] = array('required');
                break;
            default:
                $rules['password'] = array('required');
                break;
        }

        $this->form_validation->set_rules('firstName', 'Nome', $rules['firstName']);
        $this->form_validation->set_rules('lastName', 'Sobrenome', $rules['lastName']);
        $this->form_validation->set_rules('email', 'Email', $rules['email']);
        // Executa a validação e retorna o status
        return $this->form_validation->run();
    }
}
