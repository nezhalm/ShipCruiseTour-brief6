<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO useer (first_name , last_name , email , password) VALUES(:first_name , :last_name , :email , :password)');
      // Bind values

      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM useer WHERE email = :email');
      $this->db->bind(':email', $email);
     
      $row = $this->db->single();
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
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