<?php
  class Port {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // public function getPosts(){
    //   $this->db->query('SELECT *,
    //                     posts.id as postId,
    //                     users.id as userId,
    //                     posts.created_at as postCreated,
    //                     users.created_at as userCreated
    //                     FROM posts
    //                     INNER JOIN users
    //                     ON posts.user_id = users.id
    //                     ORDER BY posts.created_at DESC
    //                     ');

    //   $results = $this->db->resultSet();

    //   return $results;
    // }

    public function addPort($data){
      
      $this->db->query('INSERT INTO port (nom,pays) VALUES(:nom,:pays)');
      // Bind values 
      $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':pays', $data['pays']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getPort(){
      $this->db->query('SELECT * FROM port');

      $row = $this->db->resultSet();

      if ($row) {
          return $row;
      } else {
          return false;
      }

    }

    public function getChambre(){
      $this->db->query('SELECT * FROM type_chambre');

      $row = $this->db->resultSet();

      if ($row) {
          return $row;
      } else {
          return false;
      }

    }

    public function deletePort($id)
    {

      $this->db->query('DELETE FROM port WHERE id=:id');
      $this->db->bind(':id', $id);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     
    }



    // public function updatePost($data){
    //   $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
    //   // Bind values
    //   $this->db->bind(':id', $data['id']);
    //   $this->db->bind(':title', $data['title']);
    //   $this->db->bind(':body', $data['body']);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
     }

   