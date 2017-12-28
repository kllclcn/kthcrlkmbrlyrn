<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 
	public function __construct() {
        parent::__construct();
        //$this->load->library('session'); 
        $this->load->model('AdminModel','model');
        $this->load->helper('url');
        if(!session_id())
        {
            session_start();
        }
    }
	 
	public function index()
	{
		$data = array();
		$data['list'] = '';
		$stmt = $this->model->GetUsers();
        foreach($stmt->result() as $row)
        {
            $data['list'] .= $this->load->view('Admin/UserList',$row,TRUE);
        }
		
		$this->load->view("Admin/Admin",$data);
	}
	
	public function Add()
	{
		if(isset($_POST['submit']))
		{
			extract($_POST);
			if(trim($username) == '')
			{
				echo "Please fill-out username.";
			}
			else if(trim($password) == '')
			{
				echo "Please fill-out password.";
			}
			else
			{
				$this->model->AddUser($username,$password);
				echo "Success";
			}
		}
		
		$this->load->view('Admin/Add');
		
		
	}
	
	
	
	
	public function Update()
	{
		$data = array();
		$data['id'] = 0;
		$data['username'] = '';
		
		if(isset($_GET['id']))
		{
			$data['id'] = $_GET['id'];
			$temp = $this->model->GetUserById($data['id']);
			$data['username'] = $temp['username'];
		}
		
		if(isset($_POST['submit']))
		{
			extract($_POST);
			if(trim($id) == '')
			{
				echo "Please fill-out id.";
			}
			else if(trim($username) == '')
			{
				echo "Please fill-out username.";
			}
			else if(trim($password) == '')
			{
				echo "Please fill-out password.";
			}
			else
			{
				$this->model->UpdateUser($id,$username,$password);
				echo "Success";
			}
		}
		
		$this->load->view('Admin/Update',$data);
	}
	
	public function redirect($url)
	{
			echo "
				<script>
					window.location.href='$url';
				</script>
			";
	}
	
	
	public function Delete ()
	{
		if(isset($_GET['id']))
		{
			$this->model->DeleteUser($_GET['id']);
		}
	
	
		$this->redirect('/buynsell/admin');
    }
}
