<?php

  // This file is responsible for fetching and filtering

  class MovieRepository {
    private $apiURL = 'https://ghibliapi.dev/films?limit=200';

    public function fetchMovies() {
      $json = file_get_contents($this->apiURL);
      $data = json_decode($json, true);
      $movies = [];

      foreach ($data as $movieData) {
        $movies[] = new Movie(
          $movieData['title'],
          $movieData['description'],
          $movieData['running_time'],
          $movieData['image']
        );
      }

      return $movies;
    }

    public function filterMoviesByTitle($movies, $title) {
      if (empty($title)) {
        return $movies;
      }

      return array_filter($movies, function($movie) use ($title) {
        return stripos($movie->getTitle(), $title) !== false;
      });
    }

    public function filterMoviesByRunTime($movies, $runtime) {
      if (empty($runtime)) {
        return $movies;
      }

      $operator = substr($runtime, 0, 1);
      $value = substr($runtime, 1);

      if(!in_array($operator, ['<', '>']) || !is_numeric($value)) {
        return $movies;
      }

      return array_filter($movies, function($movie) use ($operator, $value) {
        if ($operator === '<') {
          return $movie->getRunningTime() < $value;
        } elseif ($operator === '>') {
          return $movie->getRunningTime() > $value;
        }
        return false;
      });
    }

  }

?>