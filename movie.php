<?php

  // Class definition

  class Movie {
    private $title;
    private $description;
    private $running_time;
    private $image;

    public function __construct($title, $description, $running_time, $image) {
      $this->title = $title;
      $this->description = $description;
      $this->running_time = $running_time;
      $this->image = $image;
    }

    public function getTitle() {
      return $this->title;
    }

    public function getDescription() {
      return $this->description;
    }

    public function getRunningTime() {
      return $this->running_time;
    }

    public function getImage() {
      return $this->image;
    }
  }

?>