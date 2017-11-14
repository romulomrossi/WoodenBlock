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

    public function validaCPF($cpf) {
     
        // Verifica se um número foi informado
        if(empty($cpf) || !is_numeric($cpf)) {
            $this->form_validation->set_message('validaCPF', 'O campo {field} é inválido');
            return false;
        }
     
        // Elimina possivel mascara
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        // Verifica se o numero de digitos informados é igual a 11 
        if (strlen($cpf) != 11) {
            $this->form_validation->set_message('validaCPF', 'O campo {field} é inválido');
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            $this->form_validation->set_message('validaCPF', 'O campo {field} é inválido');      
            return false;
         // Calcula os digitos verificadores para verificar se o
         // CPF é válido
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    $this->form_validation->set_message('validaCPF', 'O campo {field} é inválido');
                    return false;
                }
            }
     
            return true;
        }
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
                $session_data = array(
                    'name' => $query['firstName'],
                    'lastname' => $query['lastName'],
                    'email' => $query['email'],
                    'id' => $query['idUser']
                );
                $this->session->set_userdata($session_data);
                //echo $this->session->userdata('name');
                redirect('users/profile');
            }
        }

    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('users');
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
                $this->session->set_flashdata('registerSuccess', 'Usuário 
                    criado com sucesso. Efetue login para acessar seu painel.');
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
                $rules['documentNumber'] = array('required', 'callback_validaCPF');

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
