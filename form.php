<?php

  // Function that renders the filter form

  function renderForm($title = '', $runtime = '') {
    return '
      <form method="GET" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" placeholder="Enter full or partial title" name="title" value="' . htmlspecialchars($title) . '">

        <label for="runtime">Runtime:</label>
        <input type="text" id="runtime" placeholder="e.g.:<100 or >100" name="runtime" value="' . htmlspecialchars($runtime) . '">

        <input type="submit" value="filter">
      </form>
    ';
  }

?>