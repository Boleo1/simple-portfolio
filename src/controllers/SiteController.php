<?php

class SiteController
{

  public function home()
  {

    include __DIR__ . '/../views/home.php';
  }

  public function about()
  {

    include __DIR__ . '/../views/about.php';
  }

  public function projects()
  {

    include __DIR__ . '/../views/projects.php';
  }

  public function experience()
  {

    include __DIR__ . '/../views/experience.php';
  }

  public function resume()
  {

    include __DIR__ . '/../views/resume.php';
  }

  public function contact()
  {

    include __DIR__ . '/../views/contact.php';
  }

  public function admin()
  {
    if (!isset($_SESSION['logged_in'])) {
        header('Location: ' . BASE_URL .'login');
        exit;
    }

    include __DIR__ . '/../views/admin.php';
  }

  public function login()
  {
    include __DIR__ . '/../views/login.php';
  }

  public function create()
  {
    include __DIR__ . '/../views/create.php';
  }
}