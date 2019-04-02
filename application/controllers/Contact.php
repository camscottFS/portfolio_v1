<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
  public function __construct(){
    parent::__construct();
 		$this->load->database();
    $this->load->model('Contact_m', 'm');
  }

	public function index(){
		$data['title'] = 'Contact';
		$this->load->view('templates/header', $data);
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}

  public function view(){
    $data['messages'] = $this->m->view();
    $data['title'] = 'View Messages';
		$this->load->view('templates/header', $data);
		$this->load->view('protect', $data);

    // If correct password
    if($this->input->post('password') === "***") {
      //$this->unload->view('protect', $data);
  		$this->load->view('messages', $data);
      $this->load->view('templates/footer');
    } else {
      #
    }
  }

  public function send(){
    // Validation */
    $this->form_validation->set_rules('name', 'name', 'required', array(
      'required'=>'<div class="alert alert-danger"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter your name.</div>'
    ));
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email', array(
      'required'=>'<div class="alert alert-danger"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter your e-mail address.</div>',
      'valid_email'=>'<div class="alert alert-danger"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid e-mail address.</div>'
    ));
    $this->form_validation->set_rules('message', 'message', 'required', array(
      'required'=>'<div class="alert alert-danger"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a message.</div>'
    ));

    /* If Validation is good then continue */
    if($this->form_validation->run() === FALSE){
      $data['title'] = 'Contact';
  		$this->load->view('templates/header', $data);
  		$this->load->view('contact');
  		$this->load->view('templates/footer');
    } else {
      $this->session->set_flashdata('success_msg', '<div class="alert alert-success">Your message was sent successfully!</div>');
      $result = $this->m->submit();
      redirect('/contact');
    }
  }
}
