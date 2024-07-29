<?php 

  require 'form.php';
  require 'movie.php';
  require 'movie_list.php';
  require 'movieRepository.php';
  require 'movieController.php';

  $title = isset($_GET['title']) ? $_GET['title'] : '';
  $runtime = isset($_GET['runtime']) ? $_GET['runtime'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dominari Task</title>
  <link rel="shortcut icon" href="/assets/favico.png" type="image/x-icon">
  <link 
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="stylesheet" href="/style.css">
</head>
<body>

  <header>
    <div class="form-container">
      <?php echo renderForm($title, $runtime); ?>
    </div>
  </header>

  <div class="content">

    <?php

      $movieRepository = new MovieRepository();
      $movieController = new MovieController($movieRepository);
      $movies = $movieController->handleRequest();

      echo renderMovieList($movies);

    ?>
  
  </div>
  
</body>
</html>