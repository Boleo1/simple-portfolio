<?php

include_once('src/core/Database.php');

class AuthModel 
{
  private $db;

  public function __construct() 
  {
      $this->db = new Database();
  }

  public function verifyCredentials($username, $password)
  {
      $this->db->query("SELECT * FROM users WHERE username = :username AND password = :password");
      $this->db->bind(':username', $username);
      $this->db->bind(':password', $password);
  
      $result = $this->db->single();
  
      if (!$result) {
          error_log("No user found with username: $username or password mismatch");
          return false;
      }
  
      return true;
  }
  
  

  public function userExists($username) 
  {
      $this->db->query("SELECT id FROM users WHERE username = :username");
      $this->db->bind(':username', $username);
      $result = $this->db->single();

      return $result != null;
  }
}
