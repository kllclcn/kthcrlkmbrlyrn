<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizer extends CI_Controller {

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
	 
	public function __construct() 
	{
        parent::__construct();
        //$this->load->library('session'); 
        $this->load->model('OrgModel','model');
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
	
	public function Admin()
	{
		if(isset($_GET['id']))
		{
			$_SESSION['id']= $_GET['id'];
			$_SESSION['log'] = 1;
            $id=($_SESSION['id']);

		}
		
		if(isset($_SESSION['log']))
		{
			$temp = $this->model->GetAdminInfoById($_SESSION['id']);
			if($temp['name']=="none")
			{
				header('Location: http://localhost/buynsell/Organizer/AddDetails');
			}
			else
			{
				$res = $this->model->GetAdminInfo($_SESSION['id']);
				$data['username'] = $res['username'];
				$data['name'] = $temp['name'];
				$data['Gender'] = $temp['Gender'];
				$data['address'] = $temp['address'];
				$data['Birthday'] = $temp['Birthday'];
				$data['contact'] = $temp['contact'];
				$data['email'] = $temp['email'];
				$data['id_no'] = $temp['id_no'];
				$data['college'] = $temp['college'];
				$data['yearsec'] = $temp['yearsec'];
				
				$this->load->view('Organizer/Admin',$data);
			}
				
			//$this->load->view('Organizer/Admin');
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
	}
	
	
	public function Users()
	{
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['list'] = '';
			$stmt = $this->model->GetUsers();
			foreach($stmt->result() as $row)
			{
				$data['list'] .= $this->load->view('Organizer/UserList',$row,TRUE);
			}
			
			$this->load->view("Organizer/Users",$data);
		}
		
	}
	
	public function ConfirmUsers()
	{
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['id'] = 0;
			$data['id'] = $_GET['id'];
			if(isset($_POST['Confirm']))
			{
				$stmt = $this->model->Confirm($data['id']);
				header('Location: http://localhost/buynsell/Organizer/admin');
			}
			else
			{
				
				if(isset($_GET['id']))
				{
					
					$temp = $this->model->GetUserInfoById($data['id']);
					
					if(count($temp)>0)
					{
					
						$data['name'] = $temp['name'];
						$data['Gender'] = $temp['Gender'];
						$data['address'] = $temp['address'];
						$data['Birthday'] = $temp['Birthday'];
						$data['contact'] = $temp['contact'];
						$data['email'] = $temp['email'];
						$data['id_no'] = $temp['id_no'];
						$data['college'] = $temp['college'];
						$data['yearsec'] = $temp['yearsec'];
						//$data['regicard'] = $temp['regicard'];
						
						$this->load->view('Organizer/ConfirmUsers',$data);
					}
					else
					{
						header('Location: http://localhost/buynsell/Organizer/AddDetails');
					}
				}
				
				
			}
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
		
	}
	
	
	
	public function AddDetails()
	{
		if(isset($_POST['next2']))
            {   
                extract($_POST);
                
                $id=$_SESSION['id'];
                $this->model->InsertAdminDesc($id,$fullname,$gender,$address,$bdate,$mobnum,$email,$studno,$college,$yrsec);
                echo"<script>alert('Your account details are saved.')</script>";
                  header('Location: http://localhost/buynsell/Organizer/admin');
            }
            else
            {
		$this->load->view('Organizer/AddDetails');
			}
	}
	
	
	
	
	
	
	
	public function Update()
	{
		if(isset($_SESSION['log']))
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
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
		
		
	}
	
	public function redirect($url)
	{
			echo "
				<script>
					window.location.href='$url';
				</script>
			";
	}
	
	
	

	public function Prods()
	{
		if(isset($_SESSION['log']))
		{
		
			$data = array();
			$data['list'] = '';
			$stmt = $this->model->GetProds();
			foreach($stmt->result() as $row)
			{
				$data['list'] .= $this->load->view('Admin/AdminProductList',$row,TRUE);
			}
			
			$this->load->view("Organizer/Prods",$data);
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
		
	}
	
	public function ConfirmProd()
	{
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['prod_id'] = 0;
			$data['prod_id'] = $_GET['id'];
			if(isset($_POST['Confirm']))
			{
				$stmt = $this->model->ConProd($data['prod_id']);
				echo ('success!');
			}
			
			if(isset($_GET['id']))
			{
				
				$temp = $this->model->GetProdInfo($data['prod_id']);
				$data['prod_name'] = $temp['prod_name'];
				$data['category'] = $temp['category'];
				$data['price'] = $temp['price'];
				$data['prod_desc'] = $temp['prod_desc'];
				$data['place'] = $temp['place'];
				$data['date_posted'] = $temp['date_posted'];
				
			}
			
			$this->load->view('Organizer/ConfirmProd',$data);
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
		
	}
	
	
    

	public function LogOut()
	{
		unset ($_SESSION['log']);

		header('Location: http://localhost/buynsell/admin/login');
		
		
	}

}
