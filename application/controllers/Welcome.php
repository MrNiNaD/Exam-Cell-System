<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Users/Homepage');
	}

	public function slogin1(){
		//ha comp cha login page aahe.. ha ethe thevlay due to some technical reason.. bakki sagle streams mahde aahe..
		if($this->session->userdata('sid')){
			return redirect('studentsection/dashboard');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','Username','required|alpha');
		$this->form_validation->set_rules('pass','Password','required');
		if($this->form_validation->run()){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$id=$this->loginmodel->isvalidate($uname,$pass);
			if($id) {
				$this->load->library('session');
				$this->session->set_userdata('sid',$id);
				$slist=$this->loginmodel->fetchstatus();
				$this->load->view('studentsection/dashboard',['slist'=>$slist]);

			}
			else {
				$this->session->set_flashdata('Login_failed','Invalid Username/Password');
				return redirect('Welcome/slogin1');
			}
		}
		else{
			$this->load->view('Users/slogin');
		}
	}

	public function alogin(){
		if($this->session->userdata('id')){
			return redirect('Welcome/adminsection1');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','Username','required|alpha');
		$this->form_validation->set_rules('pass','Password','required');
		if($this->form_validation->run()){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$id=$this->loginmodel->iavalidate($uname,$pass);
			if($id) {
				$this->load->library('session');
				$this->session->set_userdata('id',$id);
				return redirect('Welcome/adminsection1');
			}
			else {
				$this->session->set_flashdata('Login_failed','Invalid Username/Password');
				return redirect('Welcome/alogin');
			}

		}
		else{
			$this->load->view('Users/alogin');
		}
	}

	public function adminsection1() {
		//admin login jhalyavar website aplayala ethe aanar.. admin login cha function hyacha varch aahe..
		if(!$this->session->userdata('id')){
			return redirect('Welcome/alogin');
		}
		$this->load->view('Users/dashboard');
	}

	public function stlogin(){
		if($this->session->userdata('stid')){
			return redirect('Welcome/staffdashboard');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','Username','required|alpha');
		$this->form_validation->set_rules('pass','Password','required');
		if($this->form_validation->run()){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$stid=$this->loginmodel->istvalidate($uname,$pass);
			if($stid) {
				$this->load->library('session');
				$this->session->set_userdata('stid',$stid);
				return redirect('Welcome/staffdashboard');
			}
			else {
				$this->session->set_flashdata('Login_failed','Invalid Username/Password');
				return redirect('Welcome/stlogin');
			}

		}
		else{
			$this->load->view('Users/stlogin');
		}
	}

	public function staffdashboard(){
		if(!$this->session->userdata('stid')){
			return redirect('Welcome/stlogin');
		}
		$this->load->view('staffsection/staffdashboard');
	}

	public function check()
	{
		$amount =  $this->input->post('payble_amount');
			$product_info = $this->input->post('product_info');
			$customer_name = $this->input->post('customer_name');
			$customer_emial = $this->input->post('customer_email');
			$customer_mobile = $this->input->post('mobile_number');
			$customer_address = $this->input->post('customer_address');

				//payumoney details


					$MERCHANT_KEY = "zT9h8qza"; //change  merchant with yours
					$SALT = "BxULeAFooA";  //change salt with yours

					$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
					//optional udf values
					$udf1 = '';
					$udf2 = '';
					$udf3 = '';
					$udf4 = '';
					$udf5 = '';

					 $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
					 $hash = strtolower(hash('sha512', $hashstring));

				 $success = base_url() . 'Status';
					$fail = base_url() . 'Status';
					$cancel = base_url() . 'Status';


					 $data = array(
							'mkey' => $MERCHANT_KEY,
							'tid' => $txnid,
							'hash' => $hash,
							'amount' => $amount,
							'name' => $customer_name,
							'productinfo' => $product_info,
							'mailid' => $customer_emial,
							'phoneno' => $customer_mobile,
							'address' => $customer_address,
							'action' => "https://sandboxsecure.payu.in", //for live change action  https://secure.payu.in
							'sucess' => $success,
							'failure' => $fail,
							'cancel' => $cancel
					);
					$this->load->view('confirmation', $data);

	}

	public function help()
	{
		$this->load->view('help');
	}



}
