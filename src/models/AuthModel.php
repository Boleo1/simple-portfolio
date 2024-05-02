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
      $this->db->query("SELECT password FROM users WHERE username = :username");
      $this->db->bind(':username', $username);
      $result = $this->db->single();
  
      if (!$result) {
          error_log("No user found with username: $username");
          return false;
      }
  
      if ($result->password === $password) {
          return true;
      } else {
          error_log("Password mismatch: DB Password '{$result->password}' vs. Provided Password '{$password}'");
          return false;
      }
  }
  

  public function userExists($username) 
  {
      $this->db->query("SELECT id FROM users WHERE username = :username");
      $this->db->bind(':username', $username);
      $result = $this->db->single();

      return $result != null;
  }
}
