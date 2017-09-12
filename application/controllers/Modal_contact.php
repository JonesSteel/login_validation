<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Modal_contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'email'));
    }

    function indez()
    {
        $this->load->view('modal_content_view');
    }

    function submit()
    {
        //Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        //Run validation check
        if ($this->form_validation->run() == FALSE){
            echo validation_errors();
        } else {
            //Get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $to_email = 'developsteel@gmail.com';

            $config['protool'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';

            $config['smtp_poft'] = '465';
            $config['smtp_user'] = 'ejuarez9@gmail.com';

            $config['smtp_pass'] = 'h4tecrew';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-885-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n";
            $this->email->initialize($config);

            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                echo "YES";
            } else {
                echo "NO";
            }
        }
    }

    //Custom validation function to accept alphabets and space
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str)) {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}