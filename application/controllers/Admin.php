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
		
	}
	
	public function Admin()
	{
		$this->load->view('Admin/Admin');
	}
	
	
	public function Users()
	{
		$data = array();
		$data['list'] = '';
		$stmt = $this->model->GetUsers();
        foreach($stmt->result() as $row)
        {
            $data['list'] .= $this->load->view('Admin/UserList',$row,TRUE);
        }
		
		$this->load->view("Admin/Users",$data);
	}
	
	public function ConfirmUsers()
	{
		$data = array();
		$data['id'] = 0;
		$data['id'] = $_GET['id'];
		if(isset($_POST['Confirm']))
		{
			$stmt = $this->model->Confirm($data['id']);
			echo ($stmt);
		}
		else
		{
			
			if(isset($_GET['id']))
			{
				
				$temp = $this->model->GetUserInfoById($data['id']);
				$data['name'] = $temp['name'];
				$data['Gender'] = $temp['Gender'];
				$data['address'] = $temp['address'];
				$data['Birthday'] = $temp['Birthday'];
				$data['id_no'] = $temp['id_no'];
				$data['course'] = $temp['course'];
				$data['contact'] = $temp['contact'];
				$data['email'] = $temp['email'];
				
			}
			
			$this->load->view('Admin/ConfirmUsers',$data);
		}
		
	}
	
	public function Login()
	{
        if(isset($_POST['login']))
		{
			extract($_POST);
            
            $result = $this->model->AuthenticateUser($username,$password);

            if(count($result)>0)
            {
				$this->load->view('Admin/admin');
            }
			else
			{
				echo"<script>alert('Incorrect Username or Password!')</script>";
                                                                                        $this->load->view(' Admin/login');
			}
		}
        else
        {
            $this->load->view('Admin/login');
		
		}
			
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
				$this->model->AddAdmin($username,$password);
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
                       public function viewad()
	{
		$data = array();
		$data['list'] = '';
		$stmt = $this->model->GetProducts();
                                             foreach($stmt->result() as $row)
                                            {
                                                    $data['list'] .= $this->load->view('Admin/unList',$row,TRUE);
                                            }
		
		$this->load->view("Admin/viewad",$data);
	}
	
	public function Prods()
	{
		$data = array();
		$data['list'] = '';
		$stmt = $this->model->GetProds();
        foreach($stmt->result() as $row)
        {
            $data['list'] .= $this->load->view('Admin/AdminProductList',$row,TRUE);
        }
		
		$this->load->view("/Prods",$data);
		
	}
	
	public function ConfirmProd()
	{
		$data = array();
		$data['id'] = 0;
		$data['id'] = $_GET['id'];
		if(isset($_POST['Confirm']))
		{
			$stmt = $this->model->ConProd($data['id']);
			echo ($stmt);
		}
		
		if(isset($_GET['id']))
		{
			
			$temp = $this->model->GetProdInfo($data['id']);
			$data['prod_name'] = $temp['prod_name'];
			$data['category'] = $temp['category'];
			$data['price'] = $temp['price'];
			$data['prod_desc'] = $temp['prod_desc'];
			$data['place'] = $temp['place'];
			$data['date_posted'] = $temp['date_posted'];
			
		}
		
		$this->load->view('Admin/ConfirmProd',$data);
		
	}
	
	public function ConPRod()
	{
		
	}
	
}
