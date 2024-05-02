<?php
include_once 'src/models/ProjectModel.php';
class ProjectsController {
  private $projectModel;

  public function __construct() {
      $this->projectModel = new ProjectModel();
  }

  public function index() {
    $projects = $this->projectModel->getProjects();
    var_dump($projects);
    if (!is_array($projects)) {
        $projects = [];
    }
    include 'src/views/admin.php';
}

  public function create() {
      include 'src/views/add_project.php';
  }

  public function store() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $newProject = [
              'title' => $_POST['title'],
              'description' => $_POST['description'],
              'github_link' => $_POST['github_link'] ?? '',
              'weblink' => $_POST['weblink'] ?? '',
              'detailed_desc' => $_POST['detailed_desc'] ?? '',
              'challenges' => $_POST['challenges'] ?? '',
              'lessons_improvements' => $_POST['lessons_improvements'] ?? ''
          ];
          if ($this->projectModel->addProject($newProject)) {
              header('Location: ' . BASE_URL .'admin');
          } else {
              include 'src/views/create.php';
          }
      }
  }


  public function edit($id) {
      $project = $this->projectModel->getProjectById($id);
      include 'src/views/edit_project.php';
  }

  public function update($id) {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $updatedProject = [
              '_id' => $id,
              'title' => $_POST['title'],
              'description' => $_POST['description'],
              'github_link' => $_POST['github_link'],
              'weblink' => $_POST['weblink'],
              'detailed_desc' => $_POST['detailed_desc'],
              'challenges' => $_POST['challenges'],
              'lessons_improvements' => $_POST['lessons_improvements'],
              '_date_modified' =>$_POST['_date_modified'],
          ];
          if ($this->projectModel->updateProject($updatedProject)) {
            header('Location: ' . BASE_URL .'admin');
          } else {
              include 'src/views/edit_project.php';
          }
      }
  }


  public function destroy($id) {
      if ($this->projectModel->deleteProject($id)) {
          header('Location: ' . BASE_URL .'admin');
      } else {
          echo "Failed to delete the project.";
      }
  }

  public function show($id) {
      $project = $this->projectModel->getProjectById($id);
      include 'src/views/view_project.php';
  }
}
