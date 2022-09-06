<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Page Login';
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/templates/auth_footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_legth[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_lengt' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if( $this->form_validation->run() == false) {
            $data['title'] = ' Page Registation';
            $this->load->view('auth/templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/templates/auth_footer');
        } else {
            echo "Data berhasil ditambahkan";
            // $data = [
            //     //'name' => $this->input->post('name'),
            //     //'email' => $this->input->post('email'),
            //     //htmlscpecialchars($this->input->post('name', 'true'));
            //     //htmlscpecialchars($this->input->post('email', 'true'));
            // ]
        }
    } 
}