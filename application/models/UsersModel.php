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
            $sql = "SELECT user_id,name, Gender,address, Birthday, contact, email, id_no, college, yearsec FROM user_desc WHERE user_id = ?";
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
	
	public function GetUserInfo($id)
    {
        try
        {
            $sql = "SELECT username FROM users WHERE id = ?";
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
	
	
	public function GetProducts($id) 
	{
        try
        {
            $sql = "SELECT prod_id, prod_name, category, price, prod_desc, place, imageproduct, date_posted, status FROM products
                    WHERE status IN ('available','reserved') AND NOT user_id = ? ;";
            $stmt = $this->pdo->query($sql,array($id));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
    }
	
	
	public function GetProductsInfo($id) 
	{
        try
        {
            $sql = "SELECT prod_id, prod_name, category, price, prod_desc, place, time, imageproduct, date_posted, status FROM products
                    WHERE prod_id = ? ;";
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
	
	
    
    

	public function InsertProducts($stitle,$category,$nprice,$desc,$nplace,$time,$picprodpic,$id)
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
                    time = ?,                                                                                          imageproduct = ?,
					date_posted = ?,
					status = 'submit',
					user_id = ?";

			$this->pdo->query($sql,array($stitle,$category,$nprice,$desc,$nplace,$time,$picprodpic,$dte,$id));


			
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
        
	}
	
	public function bought($prod_id,$id)
	{
		try
		{
			$dte = date("Y-m-d");
			$sql = "INSERT INTO bought
					SET prod_id = ?,
					buyer_id = ?,
					date_of_purchase= ?";
			$this->pdo->query($sql,array($prod_id,$id,$dte));		
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
		
	}
	
	public function bought2($id,$prod_id)
	{
		try
		{
			$sql = "UPDATE products
					SET status = 'reserved',
					buyer_id = ?
					WHERE prod_id = ?";
			$this->pdo->query($sql,array($id,$prod_id));
			
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
	}
	
	public function GetTrans($id) 
	{
        try
        {
            $sql = "SELECT prod_id, prod_name, date_posted, status FROM products
                    WHERE user_id = ? AND status = 'reserved'";
            $stmt = $this->pdo->query($sql,array($id));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
    }
	
	public function GetSell($id) 
	{
        try
        {
            $sql = "SELECT prod_id, prod_name, date_posted, status FROM products
                    WHERE user_id = ?";
            $stmt = $this->pdo->query($sql,array($id));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
    }
	
	public function GetBuyDate($id) 
	{
        try
        {
            $sql = "SELECT date_of_purchase FROM bought
                    WHERE prod_id = ?";
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
	
	public function GetBuy($id) 
	{
        try
        {
            $sql = "SELECT prod_id, date_of_purchase FROM bought
                    WHERE buyer_id = ?";
            $stmt = $this->pdo->query($sql,array($id));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
    }
	
	public function GetProdInfo($id)
	{
		try
        {
            $sql = "SELECT prod_id, prod_name, category, price, prod_desc, place, time, imageproduct, date_posted, status, buyer_id FROM products
                    WHERE prod_id = ? ;";
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
	
	public function GetBuyer($id)
	{
		try
        {
            $sql = "SELECT buyer_id FROM products
                    WHERE prod_id = ? ;";
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
	
	public function GetSeller($id)
	{
		try
        {
            $sql = "SELECT user_id FROM products
                    WHERE prod_id = ? ;";
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
	
	public function ConTrans($prod_id)
	{
		try
		{
			$sql = "UPDATE products
					SET status = 'seller confirmed'
					WHERE prod_id = ?";
			$this->pdo->query($sql,array($prod_id));
			
		}
		catch (Exception $ex) 
		{
            echo $ex;
            exit;
        }
        
	}
	
	public function UpdateUserDesc($fullname,$gender,$address,$mobnum,$email,$studno,$college,$yrsec,$id)
    {
        try
        {
            $sql = "UPDATE user_desc
                SET name = ?,
                Gender = ?,
                address = ?,
                contact = ?,
                email = ?,
				id_no = ?,
				college = ?,
				yearsec = ?
				WHERE admin_id = ?
                ";
            $stmt = $this->pdo->query($sql,array($fullname,$gender,$address,$mobnum,$email,$studno,$college,$yrsec,$id));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }


}
?>