<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database();
    }

    public function add($data){
      $this->db->query('INSERT INTO posts
                          (user_id,
                          title,
                          body)
                          VALUES
                          (:userid,
                          :postTitle,
                          :postBody);');
      $this->db->bind(':userid', $data['user_id']);
      $this->db->bind(':postTitle', $data['postTitle']);
      $this->db->bind(':postBody', $data['postBody']);
      
      return $this->db->execute();
    }

    public function delete($postId, $userId){
      $this->db->query('DELETE FROM posts
                        WHERE posts.user_id = :userId
                          AND posts.id = :postId');
      
      $this->db->bind(':userId', $userId);
      $this->db->bind(':postId', $postId);
      
      return $this->db->execute();
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