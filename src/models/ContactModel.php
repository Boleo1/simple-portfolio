<?php
// Contact model handles the SQL Server statements coming from the contact controller.


include_once 'src/core/Database.php';


class ContactModel
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }

  public function addContact($data)
  {
    $this->db->query("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':message', $data['message']);
    return $this->db->execute();
  }

  public function getContacts()
  {

    $this->db->query("SELECT * FROM contact");
    return $this->db->resultSet();
  }

  public function deleteContact($id) {
    $this->db->query("DELETE FROM contact WHERE _id = :_id");
    $this->db->bind(':_id', $id);
    return $this->db->execute();
}
}