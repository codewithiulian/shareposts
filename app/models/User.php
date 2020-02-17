<?php
  class User {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    /**
     * Logs a user in
     */
    public function login($email, $password){
      // Define the query.
      $this->db->query('SELECT * FROM users WHERE email = :email');
      // Bind the parameters.
      $this->db->bind(':email', $email);

      $row = $this->db->single();
           
      $hashedPassword = $row->password;
      if(password_verify($password, $hashedPassword)){
        return $row;
      }else{
        return false;
      }
    }

    /**
     * Registers a user to the database.
     */
    public function register($data){
      // Define the query.
      $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
      // Bind the parameters.
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      return $this->db->execute();
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