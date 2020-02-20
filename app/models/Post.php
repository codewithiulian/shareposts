<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database();
    }

    public function getPosts(){
      $this->db->query('SELECT  posts.title AS postTitle,
                                posts.body AS postBody,
                                posts.created_at AS postCreatedDateTime,
                                users.name AS postAuthor,
                                posts.id AS postId
                          FROM posts
                          INNER JOIN users
                            ON posts.user_id = users.id
                          WHERE users.id = :userid
                          ORDER BY posts.created_at DESC,
                                   posts.id DESC');
      $this->db->bind(':userid', $_SESSION['user_id']);
      
      return $this->db->resultSet();
    }
  }
?>