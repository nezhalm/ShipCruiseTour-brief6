<?php
  class Navire {
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

    public function addNavire($data){
      
      $this->db->query('INSERT INTO navire (nom,nombre_place,nombre_chambre) VALUES(:nom,:nombre_place,:nombre_chambre)');
      // Bind values 
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':nombre_chambre', $data['nombre_chambre']);
      $this->db->bind(':nombre_place', $data['nombre_place']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getNavire(){
      $this->db->query('SELECT * FROM navire');

      $row = $this->db->resultSet();
       
      if ($row) {
          return $row;
      } else {
          return false;
      }

    }
    

    public function deleteNavire($id)
    {

      $this->db->query('DELETE FROM navire WHERE id=:id');
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

   