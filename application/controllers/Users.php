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
        if(!session_id())
        {
            session_start();
        }
    }
	 
	
	
	public function index()
	{
		
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
		$this->load->view("Users/Btrans");
	}
        
    public function sell()
	{
		if(isset($_POST['sbmt']))
		{
			extract($_POST);
			$this->model->InsertProducts($stitle,$category,$nprice,$desc,$nplace);
			
		}
		else
		{
			$this->load->view("Users/sell");
		}
		
	}
        
    public function usermain()
	{
		
		$this->load->view("Users/usermain");
	}
	
}
