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
            $sql = "SELECT prod_name, price, place FROM products
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
    
	public function InsertProducts($stitle,$category,$nprice,$desc,$nplace)
	{
		try
		{
			$dte = .date("Y-m-d");
			$sql = "INSERT INTO products
					SET prod_name = ?,
					category = ?,
					price = ?,
					prod_desc = ?,
					place = ?,
					date_posted = ?,
					status = 'available',
					user_id = ?";
			$this->pdo->query($sql,array($stitle,$category,$nprice,$desc,$nplace,$dte,
			
		}
		catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
	}
	
	


}
?>