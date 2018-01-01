<?php
Class HomeModel extends CI_Model {

    Public function __construct() {
        parent::__construct();
        $this->pdo = $this->load->database('pdo', true);
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
	

    
    
    public function AuthenticateUser($username,$password) 
    {
        try
        {
            $sql = "SELECT id FROM users where username = ? and password = ?";
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
    
    
    public function InsertUsers($username,$password) 
    {
        try
        {
            $password = sha1($password);
            $sql = "INSERT INTO users
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
    
    public function InsertUsersDesc($temp,$fullname,$gender,$address,$bdate,$mobnum,$email)
    {
        try
        {
            $sql = "INSERT INTO user_desc
                SET user_id = ?,
				name = ?,
                Gender = ?,
                address = ?,
                Birthday = ?,
                contact = ?,
                email = ?
                ";
            $stmt = $this->pdo->query($sql,array($temp,$fullname,$gender,$address,$bdate,$mobnum,$email));
            return $stmt;
        } 
        catch (Exception $ex) 
        {
            echo $ex;
            exit;
        }
    }
	
	public function GetID($username,$password)
    {
        try
        {
			$password = sha1($password);
            $sql = "SELECT id FROM users WHERE username = ? AND password = ?";
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
    
    

}
?>