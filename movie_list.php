<?php

  // Function for rendering the list of movies

  function renderMovieList($movies) {
    if (empty($movies)) {
      return "<p>No movies found.</p>";
    }

    $html = '<div class="movie-list">';
    foreach ($movies as $movie) {
      $html .= '
        <div class="movie-card">
          <img src="' . htmlspecialchars($movie->getImage()) . '" alt="' . htmlspecialchars($movie->getTitle()) . '" class="movie-image">
          <div class="movie-details">
            <h3>' . htmlspecialchars($movie->getTitle()) . '</h3>
            <p><strong>Runtime:</strong> ' . htmlspecialchars($movie->getRunningTime()) . ' minutes</p>
            <p>' . htmlspecialchars($movie->getDescription()) . '</p>
          </div>
        </div>
      ';
    }
    $html .= '</div>';

    return $html;
  }

?>