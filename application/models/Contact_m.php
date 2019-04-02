<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_m extends CI_Model {

  public function view(){
    $this->db->order_by('messages.id', 'DESC');
    $query = $this->db->get('messages');
    return $query->result_array();
  }

  public function submit(){
    $submit = array(
      'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
      'message'=>$this->input->post('message')
    );
    $this->db->insert('messages', $submit);
  }
}

?>
