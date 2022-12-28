<?php
  class Croisier {
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

    public function addCruise($data){
     
      $this->db->query('INSERT INTO croisier (prix,image ,nombre_nuit,date_depart ,ship_id) VALUES(:prix,:image ,:nombre_nuit,:date_depart, :ship_id)');
      // Bind values
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':nombre_nuit', $data['nombre_nuit']);
      $this->db->bind(':date_depart', $data['date_depart']);
      $this->db->bind(':ship_id', $data['ship_id']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  
    public function getCroisier(){
      $this->db->query('SELECT croisier.id , croisier.prix , croisier.image , croisier.nombre_nuit , croisier.date_depart , croisier.ship_id , croisier.id_port_depart , navire.id , navire.nom as "navire_nom" , port.id,port.nom as "port_nom" from croisier , navire , port where croisier.ship_id = navire.id and croisier.id_port_depart = port.id');



      $row = $this->db->resultSet();

      if ($row) {
          return $row;
      } else {
          return false;
      }

    }
     


    public function deleteCroisier($id)
    {

      $this->db->query('DELETE FROM croisier WHERE id=:id');
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

   