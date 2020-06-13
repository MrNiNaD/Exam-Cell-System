<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class streams extends CI_Controller {

    public function index(){
      $this->load->view('student/stream');
    }

    public function mechstud(){
  		//ha comp cha login page aahe.. ha ethe thevlay due to some technical reason.. bakki sagle streams mahde aahe..
  		$this->load->library('form_validation');
  		$this->form_validation->set_rules('uname','Username','required|alpha');
  		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
  		if($this->form_validation->run()){
  			$uname=$this->input->post('uname');
  			$pass=$this->input->post('pass');
  			$this->load->model('streamvalidate');
  			$id=$this->streamvalidate->mechvalidate($uname,$pass);
  			if($id) {
  				$this->load->library('session');
  				$this->session->set_userdata('id',$id);

  			}
  			else {
  				echo "Details Not Matched!!";
  			}
  		}
  		else{
  			$this->load->view('student/mechstud');
  		}
  	}

}
?>
