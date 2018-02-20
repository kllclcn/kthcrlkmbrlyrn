<?php
Class HomeModel extends CI_Model {

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
			$result = $stmt->result();
            return (array) $result[0];
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
    
    public function InsertUsersDesc($temp,$fullname,$gender,$address,$bdate,$mobnum,$email,$studno,$college,$yrsec,$picfullpath)
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
                email = ?,
				id_no = ?,
				college = ?,
				yearsec = ?,
				regicard = ?
                ";
            $stmt = $this->pdo->query($sql,array($temp,$fullname,$gender,$address,$bdate,$mobnum,$email,$studno,$college,$yrsec,$picfullpath));
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
            $sql = "SELECT id FROM users WHERE username = ? AND password = ? ";
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
	
	public function GetIDD($username,$password)
    {
        try
        {
			$password = sha1($password);
            $sql = "SELECT id, active FROM users WHERE username = ? AND password = ? ";
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