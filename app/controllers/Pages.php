<?php

  class Pages extends Controller{
    public function __construct(){
      
    }

    public function index(){
      $data = [
        'title' => 'SharePosts',
        'description' => 'Welcome to Shareposts'
      ];
      
      $this->view('pages/index', $data); // Load the index.php view.
    }

    public function about(){
      $data = [
        'title' => 'About page',
        'description' => 'Find more about us. <br /> Version ' . APPVERSION
      ];
      $this->view('pages/about', $data); // Load the about.php view.
    }
  }

?>