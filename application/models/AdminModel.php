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
    
    public function GetAppUserById($id)
    {
        try
        {
            $sql = "SELECT id,firstname,lastname,position,username,is_admin FROM app_users WHERE id = ?";
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
	

    public function AddUser($username,$password) {
        try
        {
            $password = sha1($password);
            $sql = "INSERT INTO users
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
            $sql = "SELECT id FROM app_users where username = ? and password = ?";
            $stmt = $this->pdo->query($sql,array($username,$password));
            return $stmt->result();
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }

}
?>