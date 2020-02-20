<?php

  class Posts extends Controller{

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->postModel = $this->model('Post');
    }

    public function add(){
      $data = [
        'postTitle' => '',
        'postBody' => '',
        'postTitle_err' => '',
        'postBody_err' => ''
      ];
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Initialise the data array.
        $data = [
          'postTitle' => trim($_POST['postTitle']),
          'postBody' => trim($_POST['postBody']),
          'postTitle_err' => '',
          'postBody_err' => '',
          'user_id'=> $_SESSION['user_id']
        ];

        // Check for empty title.
        if(empty($data['postTitle'])){
          $data['postTitle_err'] = 'Please add a title to your post.';
        }

        // Check for empty body.
        if(empty($data['postBody'])){
          $data['postBody_err'] = 'Please add some content to your post.';
        }

        // If everything is valid.
        if(empty($data['postTitle_err']) && empty($data['postBody_err'])){
          // If submission successful.
          if($this->postModel->add($data)){
            flash('post_message', 'Post Added');
            redirect('posts');
          }else{ // If unsuccessful.
            die('Something went wrong.');
          }
        }else{
          $this->view('posts/add', $data);
        }
      }
      $this->view('posts/add', $data);
    }

    public function delete($postId){
      if($this->postModel->delete($postId, $_SESSION['user_id'])){
        flash('post_message', 'Post Deleted');
        redirect('posts');
      }else{ // If unsuccessful.
        die('Something went wrong.');
      }
    }

    public function index(){
      $posts = $this->postModel->getPosts();
      $data = [
        'posts' => $posts
      ];

      $this->view('posts/index', $data);
    }
  }

?>