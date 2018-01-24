<?php
Class UsersModel extends CI_Model {

    Public function __construct() {
        parent::__construct();
        $this->pdo = $this->load->database('pdo', true);
    }
    
	public function GetProducts() 
	{
        try
        {
            $sql = "SELECT prod_id, prod_name, category, price, prod_desc, place, imageproduct, date_posted, status FROM products
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
	
	
    
    

	public function InsertProducts($stitle,$category,$nprice,$desc,$nplace,$picprodpic,$id)

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
                                        imageproduct = ?,
					date_posted = ?,
					status = 'submit',
					user_id = ?";
			$this->pdo->query($sql,array($stitle,$category,$nprice,$desc,$nplace,$picprodpic,$dte,$id));

			
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