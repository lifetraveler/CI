<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules(
            'username', 'Username',
            'required|min_length[4]|max_length[12]|callback_username_check',
            array(
                'required'  => 'You have not provided %s.',
                'is_unique' => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('skymap/register/myform');
            $this->output->enable_profiler(true);
        }
        else
        {
            $this->load->view('skymap/register/formsuccess');
        }
    }

    public function username_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}