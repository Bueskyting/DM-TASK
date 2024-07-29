<?php

  // Function that renders the filter form

  function renderForm($title = '', $runtime = '') {
    return '
      <form method="GET" action="">

        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" id="title" placeholder="Enter movie title here" name="title" value="' . htmlspecialchars($title) . '">
        </div>

        <div class="form-group">
          <label for="runtime">Runtime:</label>
          <input type="text" id="runtime" placeholder="<100 or >100" name="runtime" value="' . htmlspecialchars($runtime) . '">
        </div>

        <div class="filter-button">
          <input type="submit" value="Submit">
        </div>

      </form>
    ';
  }

?>