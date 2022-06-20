<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		
		// $this ->load->model('header');
		// $this->load->helper('url');

	}
	
	public function index()
	{
		
		$this->load->view('userdata');
		
	}
	public function school_data()
	{
		
		//$this->load->view('add_school');
		$this->form_validation->set_rules('name', 'Name', 'required');
        
       
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('sub', 'Sub', 'required');
      
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
		if ($this->form_validation->run() == FALSE)
        {  print_r($_POST);
		echo "	<h1 style='color:red'>Please fill all  field correctly</h1>";
            $this->index();

        }
		else
		{
			//print_r($_POST);
			echo $this->input->post('email');
			$to=$this->input->post('email');
			echo $to;
			$subject = 'welcome to Amanshukla';
			$from='amanshukla162001@gmail.com';
			$emailContent=$this->input->post('subject');
			$data['name']=$this->input->post('name');

			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_crypto' => 'ssl',
				'smtp_timeout' => '30',
				'smtp_user' => 'enter email', //  your smtp user
				'smtp_pass' => 'enter password', //  your smtp password
				'wordwrap' => TRUE
			);
    		//$config['validation'] = TRUE; // bool whether to validate email or not 

     

    		$this->email->initialize($config);
		//	$this->load->library('email');
			
    		//$this->email->set_mailtype("html");
    		$this->email->from($from);
    		$this->email->to($to);
    		$this->email->subject($subject);
    		$this->email->message($emailContent);
			$this->email->set_newline("\r\n");
			$this->email->send();
    		if($this->email->send()){
    		$this->session->set_flashdata('msg',"Mail has been sent succe");
			$this->session->set_flashdata('msg_class',"alert-success");
			print_r($_POST);
			return   $this->index();
			}
			else{
				show_error($this->email->print_debugger());
				$this->session->set_flashdata('msg',"Mail has been not  sent ");
				$this->index();
			}
		}
	}
}
