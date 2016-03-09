<?php
    class user_model extends CI_Model
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        
        public function login($email, $password)
        {
            $query = $this->db->query("SELECT * FROM `Users` WHERE `Email`='$email' AND `Password`='$password'");
            if($query->num_rows() > 0)
            {
                return $query;
            }
            else
            {
                return false;
            }
        }
        
        public function register($firstName, $lastName, $username, $email, $password)
        {
            $data = array(
                "Firstname" => $firstName,
                "Surname" => $lastName,
                "Username" => $username,
                "Email" => $email,
                "Password" => $password
            );
            $query = $this->db->insert("Users", $data);
            if($query)
                return $this->db->insert_id();
            else
                return false;
        }
    }
?>
