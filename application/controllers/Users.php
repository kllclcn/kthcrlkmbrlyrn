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
			$_SESSION['user_id']= $_GET['id'];
			$_SESSION['user_log'] = 1;
                                                                  $id=($_SESSION['user_id']);

		}
		
		
		if(isset($_SESSION['user_log']))
		{
			//$data = array();
			//$data['id'] = $_GET['id'];
			//$_SESSION['user']['user_id'] = $data['id'];
			//var_dump ($_SESSION['user_id']);
			
			//$_SESSION['user']['user_log'] = 1;
			//var_dump($_SESSION['user_log']);

			
			
			$temp = $this->model->GetUserInfoById($_GET['id']);
				$data['name'] = $temp['name'];
				$data['Gender'] = $temp['Gender'];
				$data['address'] = $temp['address'];
				$data['Birthday'] = $temp['Birthday'];
				$data['id_no'] = $temp['id_no'];
				$data['course'] = $temp['course'];
				$data['contact'] = $temp['contact'];
				$data['email'] = $temp['email'];
		//var_dump($data);	
		$this->load->view("Users/usermain",$data);
			
			//$this->load->view("Users/usermain",$data);
		}
		else
		{
			var_dump ($_SESSION['user_id']);
			var_dump($_SESSION['user_log']);
			//header('Location: http://localhost/buynsell/Home/login');
		}
		
		
	}
	
	
	public function Buy()
	{
		if(isset($_SESSION['user_log']))
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
		else
		{
			header('Location: http://localhost/buynsell/Home/login');
		}
		
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
			//$this->model->bought($data['id']);
			$this->model->bought2($data['id']);
			$this->load->view("Users/Btrans");
			
		
	}
        
    public function sell()
	{
		if(isset($_SESSION['user_log']))
		{

			$id = $_SESSION['user_id'];
			//var_dump ($id);
			if(isset($_POST['sbmt']))
			{
				extract($_POST);
				
				//$id = $_SESSION['user']['id'];
                $prodpic = $_FILES["pic"]["name"];
                $path = "C:\xampp\htdocs\buynsell\images\\";
                $picfullpath= "{$path}{$prodpic}" ; echo "<br>";
				$this->SaveImage();
				$this->model->InsertProducts($stitle,$category,$nprice,$desc,$nplace,$picfullpath,$id);
				echo "done";
				//header("Location: http://localhost/buynsell/Users/usermain");
			}
			else
			{
				//var_dump ($_SESSION['user']['user_id']);
				$id = $_SESSION['user_id'];
				//var_dump ($id);
				$this->load->view("Users/sell");
				//header("Location: http://localhost/buynsell/Users/sell");
			}

		}
		
		else
		{
			header('Location: http://localhost/buynsell/Home/login');
		}
		
	}
	
	public function SaveImage()
    {
        $status = array();
        $status['message'] = '';
        
        $target_dir = FCPATH.'images/';
        $filename = basename($_FILES["pic"]["name"]);
        $target_file = $target_dir.$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["pic"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $status['message'] .= "File is not an image. ";
                $uploadOk = 0;
            }
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            $status['message'] .= "Sorry, file already exists. ";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["pic"]["size"] > 500000) {
            $status['message'] .= "Sorry, your file is too large (maximum of 5mb). ";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $status['message'] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $status['message'] .= "Sorry, your file was not uploaded. ";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
                $status['message'] = "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
            } else {
                $status['message'] .= "Sorry, there was an error uploading your file. ";
            }
        }
        
        if($uploadOk)
        {
            $status['success'] = TRUE;
        }
        else
        {
            $status['success'] = FALSE;
        }

        
        $status['filename'] = $filename;
        return $status;
    }
        
	
	public function transact()
	{
		if(isset($_SESSION['user_log']))
		{
			$id = $_SESSION['user_id'];
			//var_dump ($id);
			$data = array();
				$data['list'] = '';
				$stmt = $this->model->GetTrans($id);
				foreach($stmt->result() as $row)
				{
					$data['list'] .= $this->load->view('Users/transList',$row,TRUE);
				}
			$this->load->view("Users/transact",$data);
		}
		else
		{
			header('Location: http://localhost/buynsell/Home/login');
		}
	}
	
	public function ConfirmTrans()
	{
		if(isset($_SESSION['user_log']))
		{
			$data = array();
			$data['prod_id'] = 0;
			$data['prod_id'] = $_GET['id'];
			if(isset($_POST['Confirm']))
			
			{
				$this->model->bought($data['prod_id']);
				$stmt = $this->model->Contrans($data['prod_id']);
				header("Location: http://localhost/buynsell/Users/usermain");
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
				
			$this->load->view('Users/ConfirmTrans',$data);
		}
		else
		{
			header('Location: http://localhost/buynsell/Home/login');
		}
	}
	
	public function LogOut()
	{

		unset ($_SESSION['user_log']);
		header('Location: http://localhost/buynsell/Home/login');
		
		
	}
   
	
}
