<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main');
	}

    public function login()
	{
		$this->load->view('login');
	}

	public function members()
	{
	  	$this->load->view('members');
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        if ($this->form_validation->run()) {
		redirect('main/members');
	} else {
		echo "bad login";
		$this->load->view('login');

	}

	}
 
	public function validate_credentials() 
	{
		$this->load->model('model_users');
		if ($this->model_users->can_log_in()) {
            return true;
        } else {
			$this->form_validation->set_message('validate_credentials', 'Логин или пароль неверны!');
			return false;
		}
	}

}

