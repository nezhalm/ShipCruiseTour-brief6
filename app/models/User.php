<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO users (first_name , last_name , email , activationcode) VALUES(:first_name , :last_name , :email , :activationcode)');
      // Bind values
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':activationcode', $data['activationcode']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

 


    // Login User
    public function login($activationcode){
      $this->db->query('SELECT * FROM users WHERE activationcode = :activationcode');
      $this->db->bind(':activationcode', $activationcode);
     
     $row = $this->db->single();
      if($row ){
        return $row;
      } else {
        return false;
      }
    

    }

    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM useer WHERE email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  
    // Get User by ID
    public function getUserById($id){
      $this->db->query('SELECT * FROM useer WHERE id = :id');
      // Bind value
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }