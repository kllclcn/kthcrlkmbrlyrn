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
	 
	public function __construct() 
	{
        parent::__construct();
        //$this->load->library('session'); 
        $this->load->model('AdminModel','model');
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
		if(isset($_SESSION['log']))
		{
			//$temp = $this->model->GetAdminInfoById($_SESSION['id']);
			//	$res = $this->model->GetAdminInfo($_SESSION['id']);
			//	$data['username'] = $res['username'];
			//	$data['name'] = $temp['name'];
			//	$data['Gender'] = $temp['Gender'];
			//	$data['address'] = $temp['address'];
			//	$data['Birthday'] = $temp['Birthday'];
			//	$data['contact'] = $temp['contact'];
			//	$data['email'] = $temp['email'];
			//	$data['id_no'] = $temp['id_no'];
			//	$data['college'] = $temp['college'];
			//	$data['yearsec'] = $temp['yearsec'];
				
			//$this->load->view('Admin/Admin',$data);
			$this->load->view('Admin/Admin');
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
				$data['list'] .= $this->load->view('Admin/UserList',$row,TRUE);
			}
			
			$this->load->view("Admin/Users",$data);
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
				header('Location: http://localhost/buynsell/admin/admin');
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
					$data['contact'] = $temp['contact'];
					$data['email'] = $temp['email'];
					$data['id_no'] = $temp['id_no'];
					$data['college'] = $temp['college'];
					$data['yearsec'] = $temp['yearsec'];
					
				}
				
				$this->load->view('Admin/ConfirmUsers',$data);
			}
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
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
				$_SESSION['id'] = $result['id'];
				if($_SESSION['id']==1)
				{
					//echo $_SESSION['id'];
					$_SESSION['log'] = 1;
					header('Location: http://localhost/buynsell/admin/Admin');
				}
				else
				{
					//var_dump($result['id']);
					header('Location: http://localhost/buynsell/organizer/admin/?id='.$result['id']);
				}
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
		
		if(isset($_SESSION['log']))
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
				if($password == $Cpassword)
				{
					 echo"<script>alert('Admin added!');</script>";
					$this->model->AddAdmin($username,$password);
					header('Location: http://localhost/buynsell/admin/admin');
				}
				else
				{
					echo"<script>alert('Password did not match! Please try again')</script>";
					$this->load->view('Admin/Add');
				}
			}
			$this->load->view('Admin/Add');
			
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
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
	
	
	public function Delete ()
	{
		if(isset($_SESSION['log']))
		{
			if(isset($_GET['id']))
			{
				$this->model->DeleteAdmin($_GET['id']);
			}
		
		
			$this->redirect('/buynsell/admin/admin');
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
    }
	
    public function viewad()
	{
		if(isset($_SESSION['log']))
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
			
			$this->load->view("Admin/Prods",$data);
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
				header('Location: http://localhost/buynsell/admin/admin');
			}
			
			if(isset($_GET['id']))
			{
				
				$temp = $this->model->GetProdInfo($data['prod_id']);
				$data['prod_name'] = $temp['prod_name'];
				$data['category'] = $temp['category'];
				$data['price'] = $temp['price'];
				$data['prod_desc'] = $temp['prod_desc'];
				$data['place'] = $temp['place'];
				$data['imageproduct'] = $temp['imageproduct'];
				$data['date_posted'] = $temp['date_posted'];
				$data['status'] = $temp['status'];
				
			}
			
			$this->load->view('Admin/ConfirmProd',$data);
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
		
	}
	
	
        
    public function delad()
    {
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['list'] = '';
			$stmt = $this->model->GetAdmins();
			foreach($stmt->result() as $row)
			{
				$data['list'] .= $this->load->view('Admin/AdminList',$row,TRUE);
			}
			
			$this->load->view("Admin/delad",$data);
		}
		
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
    }
	
	public function DeleteProduct()
	{
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['prod_id'] = 0;
			$data['prod_id'] = $_GET['id'];
			
				$stmt = $this->model->DeleteProd($data['prod_id']);
				header('Location: http://localhost/buynsell/Organizer/admin');
			
		}
		else
		{
			header('Location: http://localhost/buynsell/admin/login');
		}
		
	}
	
	public function DeleteUser()
	{
		$data = array();
			$data['id'] = 0;
			$data['id'] = $_GET['id'];
			$stmt = $this->model->DelUser($data['id']);
			header('Location: http://localhost/buynsell/Admin/admin');
			
	}
	
	public function DelUsers()
	{
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['list'] = '';
			$stmt = $this->model->GetUsersToDel();
			foreach($stmt->result() as $row)
			{
				$data['list'] .= $this->load->view('Admin/DelUsersList',$row,TRUE);
			}
			
			$this->load->view("Admin/DelUsers",$data);
		}
	}
	
	public function ConfirmDelUser()
	{
		if(isset($_SESSION['log']))
		{
			$data = array();
			$data['id'] = 0;
			$data['id'] = $_GET['id'];
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
						
						$this->load->view('Admin/ConfirmDelUser',$data);
				}
				
				
				
				
			}
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
