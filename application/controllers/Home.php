<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->library('session'); 
        $this->load->model('HomeModel','model');
        $this->load->helper('url');
        
		
    } 
	public function redirect($url)
	{
			echo "
				<script>
					window.location.href='$url';
				</script>
			";
	}
	public function Login()
	{
        if(isset($_POST['login']))
        {
			extract($_POST);
            
            $result = $this->model->GetIDD($username,$password);
            
            if(count($result)>0)
            {
				if($result['active']==1)
				{
					$_SESSION['user_id'] = $result['id'];
					$_SESSION['user_name'] = $result['username'];
					$_SESSION['user_log'] = 1;
					var_dump($result['id']);
					var_dump ($_SESSION['user_id']);
					var_dump($_SESSION['user_log']);
					var_dump($_SESSION['user_name']);
					
					header("Location: http://localhost/buynsell/Users/usermain/?id=".$result['id']);
				}
				else
				{
					echo"<script>alert('You're not yet allowed to LogIn. Please wait for confirmation.')</script>";
					$this->redirect('login');
				}
				
           }
			else
			{
				echo"<script>alert('Incorrect Username or Password!')</script>";
                $this->redirect('login');
			}
           }
        else
        {
            $this->load->view('Home/login');
		
		}
			
	}
	
	public function Signup()
	{
            //if(isset($_POST['prev1']))
            //{ 
               // $this->load->view('Home/login');
            //}
            if(isset($_POST['next2']))
            {   
                extract($_POST);
				
				$prodpic = $_FILES["pic"]["name"];
                $path = "\buynsell\images\\";
                $picfullpath= "{$path}{$prodpic}" ; echo "<br>";
				$this->SaveImage();
				
				
                if($password == $Cpassword)
                {
					if($pres=="emanuel de guzman" || $pres=="emanuel c. de guzman")
					{
						if($found=="virgin")
						{
							$this->model->InsertUsers($username,$password);
							$temp = $this->model->GetID($username,$password);
							$this->model->InsertUsersDesc($temp,$fullname,$gender,$address,$bdate,$mobnum,$email,$studno,$college,$yrsec,$picfullpath);
							echo"<script>alert('Your account is on process.')</script>";
							$this->redirect('login');
						}
					}
                
                }   
            }
            else
            {
                $this->load->view("Home/signup");
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
	

	
    public function about()
	{
		$this->load->view("Home/about");
	}
        
    public function homes()
	{
		$this->load->view("Home/homes");
	}

    public function homevision()
	{
         $this->load->view("Home/homevision");
    }
       
    public function homemission()
	{
        $this->load->view("Home/homemission");
    }
}