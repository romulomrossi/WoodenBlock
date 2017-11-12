<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

    public function index()
    {
        $this->load->view('login');
    }

    public function Register()
    {
        $this->load->view('register');
    }

    public function Login()
    {
        $input = $this->input->post();
        $query = $this->UsersModel->GetByEmail($input['email']);
        
        if($query == null)
        {
            $this->session->set_flashdata('error', 'O email digitado não existe.');
            $this->load->view('login');
        }
        else
        {
            if($query['password'] != $input['password'])
            {
                $this->session->set_flashdata('error', 'Senha incorreta, tente novamente.');
                $this->load->view('login');
            }
            else
            {
                $this->session->IdLoggedUser = $query['idUser'];
                redirect('users/profile');
            }
        }

    }

    public function Create()
    {
        $users = $this->UsersModel->GetAll();
        $validation = self::Validate();
        if($validation)
        {
            $user = $this->input->post();
            $status = $this->UsersModel->Insert($user);
            if(!$status)
            {
				$this->session->set_flashdata('error', 'Não foi possível inserir o contato.');
                $this->load->view('register');                        
            }
            else
            {
				$this->session->set_flashdata('success', 'Contato inserido com sucesso.');
				// Redireciona o usuário para a home
				redirect();
			}
        }   
        else
        {
            $this->session->set_flashdata('error', validation_errors('<p>', '</p>'));
            $this->load->view('register');        
        }
    }

    private function Validate($operation = 'create')
    {
        switch($operation)
        {
            case 'create':
                $rules['firstName'] = array('trim', 'required');
                $rules['lastName'] = array('trim', 'required');
                $rules['email'] = array('trim', 'required', 'valid_email', 'is_unique[Users.email]');
                $rules['password'] = array('required');
                $rules['documentNumber'] = array('required');

                break;
            default:
                $rules['password'] = array('required');
                break;
        }

        $this->form_validation->set_rules('firstName', 'Nome', $rules['firstName']);
        $this->form_validation->set_rules('lastName', 'Sobrenome', $rules['lastName']);
        $this->form_validation->set_rules('email', 'Email', $rules['email']);
        $this->form_validation->set_rules('password', 'Senha', $rules['password']);
        $this->form_validation->set_rules('documentNumber', 'CPF', $rules['documentNumber']);
        // Executa a validação e retorna o status
        return $this->form_validation->run();
    }
}
