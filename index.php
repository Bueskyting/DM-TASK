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
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- This file displays the form and movie list -->

  <div class="form-container">

    <?php

    require 'form.php';
    require 'movie.php';
    require 'movieRepository.php';
    require 'movieController.php';

    $title = isset($_GET['title']) ? $_GET['title'] : '';
    $runtime = isset($_GET['runtime']) ? $_GET['runtime'] : '';

    echo renderForm($title, $runtime);

    $movieRepository = new MovieRepository();
    $movieController = new MovieController($movieRepository);
    $movies = $movieController->handleRequest();

    require 'movie_list.php';
    echo renderMovieList($movies);

    ?>
  
  </div>
  
</body>
</html>