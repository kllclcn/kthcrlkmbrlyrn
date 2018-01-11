<?php
Class AdminModel extends CI_Model {

    Public function __construct() {
        parent::__construct();
        $this->pdo = $this->load->database('pdo', true);
    }
    
    public function GetUsers() 
	{
        try
        {
            $sql = "SELECT * FROM users 
                    WHERE active = 2";
            $stmt = $this->pdo->query($sql);
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
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
	
	
	public function GetUserById($id)
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
	

    public function AddAdmin($username,$password) {
        try
        {
            $password = sha1($password);
            $sql = "INSERT INTO admin
                    SET username = ?,
                    password = ?,
                    active = ?
                    ";
            $stmt = $this->pdo->query($sql,array($username,$password,1));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
    
    public function DeleteUser($id)
    {
        try
        {
            $sql = "DELETE from users
                    WHERE id = ?
                    ";
            $stmt = $this->pdo->query($sql,array($id));

            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
    
    public function UpdateUser($id,$username,$password) {
        try
        {
            
            
            $password = sha1($password);
           
                $sql = "UPDATE users
                        SET username = ?,
						password = ?
                        WHERE id = ?
                        ";
                $stmt = $this->pdo->query($sql,array($username,$password,$id));
            
            
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
    
    public function AuthenticateUser($username,$password) 
    {
        try
        {
            $sql = "SELECT id FROM admin where username = ? and password = ? and active = 1;";
			$password = sha1($password);
            $stmt = $this->pdo->query($sql,array($username,$password));
			
            return $stmt->result();
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
	
	public function Confirm($id)
	{
		$stmt = "SUCCESS";
		try
		{
			$sql = "UPDATE users
					SET active = 1
					WHERE id = ?";
					
			$this->pdo->query($sql,array($id));
			return $stmt;
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
            $sql = "SELECT id,username FROM admin
                    WHERE active = 1";
            $stmt = $this->pdo->query($sql);
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
        
    }
	
	
	public function GetProds() 
	{
        try
        {
            $sql = "SELECT * FROM products 
                    WHERE status = 'submit'";
            $stmt = $this->pdo->query($sql);
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
            $sql = "SELECT prod_name, category, price, prod_desc, place, date_posted FROM products WHERE prod_id = ?";
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
	

}
?>