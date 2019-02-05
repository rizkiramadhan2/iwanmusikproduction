<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	function __construct()
{
    parent::__construct();
  //  $this->load->database();
   
   
}

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
		$this->load->view('new/index');
	}

	//View baru
	public function v_home(){
		$this->load->view('new/index');
	}
	public function v_work(){
		$this->load->view('new/work');
	}
	public function v_about(){
		$this->load->view('new/about');
	}
	public function v_blog(){
		$this->load->view('new/blog');
	}
	public function v_contact(){
		$this->load->view('new/contact');
	}
	public function v_work_single(){
		$this->load->view('new/work-single');
	}
}
