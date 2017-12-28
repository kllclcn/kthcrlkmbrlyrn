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

}
?>