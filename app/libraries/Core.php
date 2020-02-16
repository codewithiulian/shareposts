<?php
/**
 * App Core Class
 * Creates URL and loads Core controller
 * URL FORMAT - /controller/method/params
 */

  class Core {
    protected $currentController = 'Pages'; // The default controller page in case value is not given.
    protected $currentMethod = 'index'; // The default method is index.
    protected $params = []; // The list of parameters, by default - an empty array.

    public function __construct(){
      $url = $this->getURL(); // Define the url property.

      $this->initController($url); // Define and initialise the given Controller.

      $this->initMethod($url); // Define the given Method.

      $this->getParams($url); // Get the parameters.

      $this->callUserFunc(); // Call the Mehtod within given Controller and pass the params.
    }

    /**
     * Deconstruct the URL and return an array of parameters.
     * The first parameter is the controller/page.
     * The second parameter is the method name.
     */
    private function getURL(){
      if(isset($_GET['url'])){ // If the URL is set.
        $url = rtrim($_GET['url'], '/');// Trim the URL.
        $url = filter_var($url, FILTER_SANITIZE_URL); // Sanitise it.
        $url = explode('/', $url); // Convert into array, trim by /.

        return $url;
      }
    }

    // Initialise the first part of the URL which is the Controller name.
    private function initController(&$url){
      if(isset($url[0])){ // If the array index is not null.(The controller name)
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
          // If exists, then set as controller.
          $this->currentController = ucwords($url[0]);
          
          // Unset 0 index.
          unset($url[0]);
        }
      }
      
      // Require the controller.
      require_once '../app/controllers/' . $this->currentController . '.php';

      // Initialise the controller class (i.e. $pages = new Pages()).
      $this->currentController = new $this->currentController;
    }

    // Initialise the second part of the URL which is the Method.
    private function initMethod(&$url){
      if(isset($url[1])){ // If  the array index is not null.
        // Check to see if method exists within the controller.
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1]; // Define the currentMethod property.

          // Unset index 1.
          unset($url[1]);
        }
      }
    }

    private function getParams(&$url){
      // Define the params class property if there are any.
      $this->params = $url ? array_values($url) : [];
    }

    private function callUserFunc(){
      // Call a callback with array of params.
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
  }

?>