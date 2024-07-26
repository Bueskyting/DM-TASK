<?php

  // Function for rendering the list of movies

  function renderMovieList($movies) {
    if (empty($movies)) {
      return "<p>No movies found.</p>";
    }

    $html = '<ul>';
    foreach ($movies as $movie) {
      $html .= '
        <li>
          <img src="' . htmlspecialchars($movie->getImage()) . '" alt="' . htmlspecialchars($movie->getTitle()) . '" style="width:100px;">
          <h3>' . htmlspecialchars($movie->getTitle()) . '</h3>
          <p><strong>Runtime:</strong> ' . htmlspecialchars($movie->getRunningTime()) . ' minutes</p>
          <p>' . htmlspecialchars($movie->getDescription()) . '</p>
        </li>
      ';
    }
    $html .= '</ul>';

    return $html;
  }

?>