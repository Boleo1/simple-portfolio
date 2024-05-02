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
          'login/submit' => ['controller' => 'AuthController', 'method' => 'submitLogin'],
          'contact/submit' => ['controller' => 'ContactController', 'method' => 'submitForm'],
      ];
  }

  public function route() {
    $url = $_GET['url'] ?? 'home';
    $url = filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL);

    if (array_key_exists($url, $this->routes)) {
        $controllerName = $this->routes[$url]['controller'];
        $methodName = $this->routes[$url]['method'];
        $controllerPath = __DIR__.'/../controllers/' . $controllerName . '.php';

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controller = new $controllerName();
            if (method_exists($controller, $methodName)) {
                $controller->{$methodName}();
            } else {
                echo "Method $methodName not found in $controllerName.";
            }
        } else {
            echo "Controller file for $controllerName not found.";
        }
    } else {
        echo "Page not found."; // Simple handling for undefined routes
    }
}
}