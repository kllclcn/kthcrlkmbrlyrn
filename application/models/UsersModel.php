<?php
Class UsersModel extends CI_Model {

    Public function __construct() {
        parent::__construct();
        $this->pdo = $this->load->database('pdo', true);
    }
    
	
	
	public function GetUserInfoById($id)
    {
        try
        {
            $sql = "SELECT name, Gender,address, Birthday, id_no, course, contact, email FROM user_desc WHERE user_id = ?";
            $stmt = $this->pdo->query($sql,array($id));
            $result = $stmt->result();
            return (array) $result[0];
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
	
	
	public function GetProducts() 
	{
        try
        {
            $sql = "SELECT prod_id, prod_name, category, price, prod_desc, place, date_posted, status FROM products
                    WHERE status = 'available'";
            $stmt = $this->pdo->query($sql);
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
    }
	
	
    
    
	public function InsertProducts($stitle,$category,$nprice,$desc,$nplace,$id)
	{
		try
		{
			$dte = date("Y-m-d");
			$sql = "INSERT INTO products
					SET prod_name = ?,
					category = ?,
					price = ?,
					prod_desc = ?,
					place = ?,
					date_posted = ?,
					status = 'submit',
					user_id = ?";
			$this->pdo->query($sql,array($stitle,$category,$nprice,$desc,$nplace,$dte,$id));
			
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
        
	}
	
	public function bought($prod_id)
	{
		try
		{
			$dte = date("Y-m-d");
			$sql = "INSERT INTO bought
					SET prod_id = ?,
					date_of_purchase= ?";
			$this->pdo->query($sql,array($prod_id,$dte));		
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
		
	}
	
	public function bought2($prod_id)
	{
		try
		{
			$sql = "UPDATE products
					SET status = 'unavailable'
					WHERE prod_id = ?";
			$this->pdo->query($sql,array($prod_id));
			
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
	}
	
	


}
?>