<?php
include_once 'src/models/ProjectModel.php';
class ProjectsController {
  private $projectModel;

  public function __construct() {
      $this->projectModel = new ProjectModel();
  }

  // Display all projects on the admin dashboard
  public function index() {
    $projects = $this->projectModel->getProjects(); // Fetch projects
    var_dump($projects);
    if (!is_array($projects)) {
        $projects = []; // Ensure $projects is always an array
    }
    include 'src/views/admin.php'; // Include your view file
}

  // Display a form to add a new project
  public function create() {
      include 'src/views/add_project.php'; // Form for adding a new project
  }

  // Save a new project from the form
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
              header('Location: ' . BASE_URL .'admin'); // Redirect to the admin page
          } else {
              // Handle errors, possibly showing the form again with error messages
              include 'src/views/create.php';
          }
      }
  }

  // Display a form to edit an existing project
  public function edit($id) {
      $project = $this->projectModel->getProjectById($id);
      include 'src/views/edit_project.php'; // Form for editing the project
  }

  // Update an existing project from the form
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
              'lessons_improvements' => $_POST['lessons_improvements']
          ];
          if ($this->projectModel->updateProject($updatedProject)) {
            header('Location: ' . BASE_URL .'admin'); // Redirect to the admin page
          } else {
              // Handle errors, possibly re-showing the edit form with error messages
              include 'src/views/edit_project.php';
          }
      }
  }

  // Delete an existing project
  public function destroy($id) {
      if ($this->projectModel->deleteProject($id)) {
          header('Location: ' . BASE_URL .'admin'); // Redirect to the admin page
      } else {
          // Handle failure, possibly returning an error message
          echo "Failed to delete the project.";
      }
  }

  // View a single project detail
  public function show($id) {
      $project = $this->projectModel->getProjectById($id);
      include 'src/views/view_project.php'; // Detailed view of a single project
  }
}
