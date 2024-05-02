<?php

class SiteController
{

  public function home()
  {
    $weatherData = $this->getWeather();
    include __DIR__ . '/../views/home.php';
  }
  function getWeather() {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/current.json?q=47.47%2C-94.88",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: weatherapi-com.p.rapidapi.com",
            "X-RapidAPI-Key: API KEY GOES HERE "
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return json_decode($response, true);
    }
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
  
  public function resume()
  {
      $file = BASE_URL . 'public/img/Resume.pdf';
      if (file_exists($file)) {
          header('Content-Type: application/pdf');
          header('Content-Disposition: inline; filename="' . basename($file) . '"');
          header('Content-Length: ' . filesize($file));
          readfile($file);
          exit;
      } else {
          echo "File not found.";
      }
  }
}