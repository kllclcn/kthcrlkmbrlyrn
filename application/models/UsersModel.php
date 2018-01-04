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
    

	
	


}
?>