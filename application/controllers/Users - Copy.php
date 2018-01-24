<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
        $this->load->model('UsersModel','model');
        $this->load->helper('url');
        if(isset($_SESSION['id']))
		{
			
		}
		else
		{
			session_start();
			
		}
    }
	 
	
	
	
	public function index()
	{
		
	}
	
	 public function usermain()
	{
		if(isset($_GET['id']))
		{
			$data = array();
			$data['id'] = $_GET['id'];
			$_SESSION['user']['user_id'] = $data['id'];
			var_dump ($_SESSION['user']['user_id']);
			
			$_SESSION['user']['user_log'] = 1;
			var_dump($_SESSION['user']['user_log']);
			$this->load->view("Users/usermain");
		}
		else
		{
			header('Location: http://localhost/buynsell/Home/login');
		}
		
		
	}
	
	
	public function Buy()
	{
		
			$data = array();
			$data['list'] = '';
			$stmt = $this->model->GetProducts();
			foreach($stmt->result() as $row)
			{
				$data['list'] .= $this->load->view('Users/productList',$row,TRUE);
			}
			
			$this->load->view("Users/buy",$data);
		
		
	}
	
	
	public function Btrans()
	{
		
			$data = array();
			$data['id'] = 0;
			
			
			if(isset($_GET['id']))
			{
				$data['id'] = $_GET['id'];
			}
			//var_dump($data['id']);
			$this->model->bought($data['id']);
			$this->model->bought2($data['id']);
			$this->load->view("Users/Btrans");
			
		
	}
        
    public function sell()
	{
		
			if(isset($_POST['sbmt']))
			{
				extract($_POST);
				$this->model->InsertProducts($stitle,$category,$nprice,$desc,$nplace);
				
				header("Location: http://localhost/buynsell/Users/usermain");
			}
			else
			{
				
				$this->load->view("Users/sell");
				//header("Location: http://localhost/buynsell/Users/sell?username=".$_GET['username']);
			}
		
	}
        
   
	
}
