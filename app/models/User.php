<?php
  class User {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    /**
     * Returns true if found any matching email in DB.
     */
    public function findUserByEmail($email){
      $this->db->query('SELECT id FROM users WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      return $this->db->rowCount() > 0;
    }
  }
?>