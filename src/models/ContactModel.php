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
    $this->db->query("INSERT INTO contact (email, subject, message) VALUES (:email, :subject, :message)");
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':subject', $data['subject']);
    $this->db->bind(':message', $data['message']);
    return $this->db->execute();
  }

  public function getContacts()
  {

    $this->db->query("SELECT * FROM contacts");
    return $this->db->resultSet();
  }

  public function deleteContact($id) {
    $this->db->query("DELETE FROM contacts WHERE id = :id");
    $this->db->bind(':id', $id);
    return $this->db->execute();
}
}