<?php
/**
 * Base Controller
 * Loads the models and views.
 */
  class Controller{
    // Load model from the Models folder.
    public function model($model){
      if(file_exists('../app/models/' . $model . '.php')){
        // Require model file.
        require_once '../app/models/' .  $model . '.php';
        
        // Initialise model (i.e. new Post()).
        return new $model();
      }else{
        die('Model does not exist.');
      }
    }

    /**
     * Loads the view.
     * $view - the view name.
     * $data - optional array to pass data through.
     */
    public function view($view, $data = []){
      // If the view exists.
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' .  $view . '.php';
      }else{
        // View does not exist.
        die('View does not exist.');
      }
    }
  }

?>