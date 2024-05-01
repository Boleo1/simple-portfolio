<?php

class Router {

  private $routes;

  public function __construct() {
      $this->routes = [
          'home' => ['controller' => 'HomeController', 'method' => 'index'],
          'about' => ['controller' => 'AboutController', 'method' => 'index'],
          'projects' => ['controller' => 'ProjectsController', 'method' => 'index'],
          'experience' => ['controller' => 'ExperienceController', 'method' => 'index'],
          'contact' => ['controller' => 'ContactController', 'method' => 'index'],
          'admin' => ['controller' => 'AdminController', 'method' => 'index'],
          'login' => ['controller' => 'LoginController', 'method' => 'index'],
      ];
  }


  public function route() {
    $url = $_GET['url'] ?? 'home';
    $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

    $controllerName = $this->routes[$url[0]]['controller'];
    $methodName = $this->routes[$url[0]]['method'] ?? 'index';
    $controllerRoute = __DIR__.'/../controllers/' . $controllerName . '.php';

    require_once $controllerRoute;
    $controller = new $controllerName();
    $controller->{$methodName}();
  }
}
