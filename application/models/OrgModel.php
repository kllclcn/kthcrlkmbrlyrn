<?php
Class OrgModel extends CI_Model {

    Public function __construct() {
        parent::__construct();
        $this->pdo = $this->load->database('pdo', true);
    }
    
	
	
	public function GetAdminInfoById($id)
    {
        try
        {
            $sql = "SELECT name, Gender,address, Birthday, contact, email, id_no, college, yearsec FROM admin_desc WHERE admin_id = ?";
            $stmt = $this->pdo->query($sql,array($id));
            $result = $stmt->result();
			if(count($result)>0)
			{
				return (array) $result[0];
			}
			else
			{
				$data['name'] = "none";
			
				return $data;
			}
            
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
	
	public function GetAdminInfo($id)
    {
        try
        {
            $sql = "SELECT username FROM admin WHERE id = ?";
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
            $sql = "SELECT user_id,name, Gender,address, Birthday, contact, email, id_no, college, yearsec, regicard FROM user_desc WHERE user_id = ?";
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
            $stmt = $this->pdo->query($sql,array($username,$password,2));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
    
    public function DeleteAdmin($id)
    {
        try
        {
            $sql = "DELETE from admin
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
            $sql = "SELECT id FROM admin where username = ? and password = ? and active = 1 or active = 2;";
			$password = sha1($password);
            $stmt = $this->pdo->query($sql,array($username,$password));
			$result = $stmt->result();
            return (array) $result[0];
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
	
	public function ConProd($id)
	{
		try
		{
			$sql = "UPDATE products
					SET status = 'available'
					WHERE prod_id = ?";
					
			$this->pdo->query($sql,array($id));
			
		}
		catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
	}
	
	public function GetAdmins() 
	{
        try
        {
            $sql = "SELECT * FROM admin
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
	
	public function Delete($id)
    {
        try
        {
            $sql = "DELETE from admin
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
	
	public function InsertAdminDesc($id,$fullname,$gender,$address,$bdate,$mobnum,$email,$studno,$college,$yrsec)
    {
        try
        {
            $sql = "INSERT INTO admin_desc
                SET admin_id = ?,
				name = ?,
                Gender = ?,
                address = ?,
                Birthday = ?,
                contact = ?,
                email = ?,
				id_no = ?,
				college = ?,
				yearsec = ?
                ";
            $stmt = $this->pdo->query($sql,array($id,$fullname,$gender,$address,$bdate,$mobnum,$email,$studno,$college,$yrsec));
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