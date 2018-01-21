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
            
            $result = $this->model->AuthenticateUser($username,$password);

             if(count($result)>0)
            {
				
				$_SESSION['id'] = $result['id'];
				$_SESSION['log'] = 1;
				header("Location: http://localhost/buynsell/Users/usermain/?id=".$result['id']);
            }
			else
			{
				echo"<script>alert('Incorrect Username or Password!')</script>";
                $this->load->view('Home/login');
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
                if($password == $Cpassword)
                {
                $this->model->InsertUsers($username,$password);
                $temp = $this->model->GetID($username,$password);
                $this->model->InsertUsersDesc($temp,$fullname,$gender,$address,$bdate,$mobnum,$email);
                echo"<script>alert('Your account is on process.')</script>";
                $this->load->view('Home/login');
                }   
            }
            else
            {
                $this->load->view("Home/signup");
            }		
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