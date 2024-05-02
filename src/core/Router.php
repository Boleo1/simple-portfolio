<?php

class Router {
  private $routes;

  public function __construct() {
      $this->routes = [
          'home' => ['controller' => 'SiteController', 'method' => 'home'],
          'about' => ['controller' => 'SiteController', 'method' => 'about'],
          'projects' => ['controller' => 'SiteController', 'method' => 'projects'],
          'experience' => ['controller' => 'SiteController', 'method' => 'experience'],
          'contact' => ['controller' => 'SiteController', 'method' => 'contact'],
          'admin' => ['controller' => 'SiteController', 'method' => 'admin'],
          'login' => ['controller' => 'SiteController', 'method' => 'login'],
          'create' => ['controller' => 'SiteController', 'method' => 'create'],
          'login/submit' => ['controller' => 'AuthController', 'method' => 'submitLogin'],
          'contact/submit' => ['controller' => 'ContactController', 'method' => 'submitForm'],
          'admin/delete' => ['controller' => 'ContactController', 'method' => 'deleteContact'],
          'projects/view' => ['controller' => 'ProjectsController', 'method' => 'show'],
          'projects/edit' => ['controller' => 'ProjectsController', 'method' => 'edit'],
          'projects/delete' => ['controller' => 'ProjectsController', 'method' => 'destroy'],
          'projects/create' => ['controller' => 'ProjectsController', 'method' => 'create'],
          'projects/store' => ['controller' => 'ProjectsController', 'method' => 'store'],
          'projects/update' => ['controller' => 'ProjectsController', 'method' => 'update']
      ];
  }

  public function route() {
    $url = $_GET['url'] ?? 'home';
    $url = filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL);
    $urlParts = explode('/', $url);

    // Attempt to match the base part of the URL (e.g., 'projects/edit')
    $baseRoute = implode('/', array_slice($urlParts, 0, 2));

    if (array_key_exists($baseRoute, $this->routes)) {
        $controllerName = $this->routes[$baseRoute]['controller'];
        $methodName = $this->routes[$baseRoute]['method'];
        $controllerPath = __DIR__.'/../controllers/' . $controllerName . '.php';

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controller = new $controllerName();

            // Check if the method needs parameters
            $param = $urlParts[2] ?? null; // Assuming ID or other parameters are always the third part of the URL
            if ($param && method_exists($controller, $methodName)) {
                $controller->{$methodName}($param); // Pass parameter to the method
            } else if (method_exists($controller, $methodName)) {
                $controller->{$methodName}(); // Call method without parameters
            } else {
                echo "Method $methodName not found in $controllerName.";
            }
        } else {
            echo "Controller file for $controllerName not found.";
        }
    } else {
        echo "Page not found.";
    }
}
}