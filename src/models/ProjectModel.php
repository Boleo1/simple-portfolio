<?php
include_once 'src/core/Database.php';
class ProjectModel {
  private $db;

  public function __construct() {
      $this->db = new Database;
  }

  public function getProjects() {
    $this->db->query("SELECT * FROM projects WHERE _deleted_date IS NULL");
    $result = $this->db->resultSet();
    return $result ? $result : [];
}

  public function getProjectById($id) {
      $this->db->query("SELECT * FROM projects WHERE _id = :id AND _deleted_date IS NULL");
      $this->db->bind(':id', $id);
      return $this->db->single();
  }

  public function addProject($data) {
      $this->db->query("INSERT INTO projects (title, description, github_link, weblink, detailed_desc, challenges, lessons_improvements) VALUES (:title, :description, :github_link, :weblink, :detailed_desc, :challenges, :lessons_improvements)");
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':github_link', $data['github_link']);
      $this->db->bind(':weblink', $data['weblink']);
      $this->db->bind(':detailed_desc', $data['detailed_desc']);
      $this->db->bind(':challenges', $data['challenges']);
      $this->db->bind(':lessons_improvements', $data['lessons_improvements']);
      return $this->db->execute();
  }

  public function updateProject($data) {
    $this->db->query("UPDATE projects SET title = :title, description = :description, github_link = :github_link, weblink = :weblink, detailed_desc = :detailed_desc, challenges = :challenges, lessons_improvements = :lessons_improvements, _last_modified = NOW() WHERE _id = :id");
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':github_link', $data['github_link']);
    $this->db->bind(':weblink', $data['weblink']);
    $this->db->bind(':detailed_desc', $data['detailed_desc']);
    $this->db->bind(':challenges', $data['challenges']);
    $this->db->bind(':lessons_improvements', $data['lessons_improvements']);
    $this->db->bind(':id', $data['_id']);
    return $this->db->execute();
}

  public function deleteProject($id) {
      $this->db->query("UPDATE projects SET _deleted_date = NOW() WHERE _id = :id");
      $this->db->bind(':id', $id);
      return $this->db->execute();
  }
}

