<?php

  // Controller that handles the request

  class MovieController {
    private $movieRepository;

    public function __construct($movieRepository) {
      $this->movieRepository = $movieRepository;
    }

    public function handleRequest() {
      $title = isset($_GET['title']) ? $_GET['title'] : '';
      $runtime = isset($_GET['runtime']) ? $_GET['runtime'] : '';

      $movies = $this->movieRepository->fetchMovies();
      $movies = $this->movieRepository->filterMoviesByTitle($movies, $title);
      $movies = $this->movieRepository->filterMoviesByRuntime($movies, $runtime);

      return $movies;
    }
  }

?>