<?php
  class Produit {
    private $db;
 
    public function __construct(){
      $this->db = new Database;
    }

 
    public function addproduit($data){
      
      $this->db->query('INSERT INTO produit (libelle_produit, quantite_produit ,price_produit,img_produit) VALUES(:libelle_produit,:quantite_produit ,:price_produit,:img_produit )');
      // Bind values
      $this->db->bind(':libelle_produit', $data['libelle_produit']);
      $this->db->bind(':quantite_produit', $data['quantite_produit']);
      $this->db->bind(':price_produit', $data['price_produit']);
      $this->db->bind(':img_produit', $data['img_produit']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getProduit(){
      $this->db->query('SELECT * FROM produit');

      $row = $this->db->resultSet();

      if ($row) {
          return $row;
      } else {
          return false;
      }

    }

    public function tridecProduit(){
      $this->db->query('SELECT * FROM produit  ORDER by price_produit DESC');

      $row = $this->db->resultSet();

      if ($row) {
          return $row;
      } else {
          return false;
      }

    }

    public function tricProduit(){
      $this->db->query('SELECT * FROM produit  ORDER by price_produit ASC');

      $row = $this->db->resultSet();

      if ($row) {
          return $row;
      } else {
          return false;
      }

    }


    public function  tridecProduit_date(){
      $this->db->query('SELECT * FROM produit  ORDER by date_ajout DESC');
      $row = $this->db->resultSet();
      if ($row) {
          return $row;
      } else {
          return false;
      }

}   
    public function tricProduit_date(){
      $this->db->query('SELECT * FROM produit  ORDER by date_ajout ASC');
      $row = $this->db->resultSet();
      if ($row) {
          return $row;
      } else {
          return false;
      }
    }

    public function nombreProduit(){
      $this->db->query('SELECT COUNT(*) FROM produit');
      $this->db->execute();
      $count = $this->db->fetchColumn();
      return $count;
      
    }
    public function sommeProduit(){
      $this->db->query('SELECT SUM(price_produit) FROM produit');
      $this->db->execute();
      $count = $this->db->fetchColumn();
      return $count;
      
    }
    public function prixProduit(){
      $this->db->query('SELECT MAX(price_produit) from produit');

      $this->db->execute();
      $count = $this->db->fetchColumn();
      return $count;

    }
    public function prixminProduit(){
      $this->db->query('SELECT MIN(price_produit) from produit');

      $this->db->execute();
      $count = $this->db->fetchColumn();
      return $count;

    }

    public function deleteProduit($id)
    {

      $this->db->query('DELETE FROM produit WHERE id_produit=:id');
      $this->db->bind(':id', $id);
      if(   $row = $this->db->resultSet()){
        return true;
      } else {
        return false;
      }
     
    }


    public function search( $libelle)
    {
   
      $this->db->query('SELECT * FROM produit where libelle_produit LIKE "%":libelle "%"');
      $this->db->bind(':libelle', $libelle);
      $row = $this->db->resultSet();
      if($row){
        return $row;
      } else {
        return false;
      }
     
    }

    public function updateProduit($data)
    {

    $imgPath = URLROOT . "/img/". $data["img_produit"]["name"];
    $img = $data["img_produit"]["name"];
      move_uploaded_file($data['img_produit']["tmp_name"], $imgPath);
      if (isset($data["img_produit"]) && !empty($data["img_produit"])) {
        $this->db->query('UPDATE produit SET libelle_produit=:libelle_produit,price_produit=:price_produit ,img_produit=:img_produit,quantite_produit=:quantite_produit WHERE id_produit = :id');

          $this->db->bind(':img_produit', $img);
      } else {
        $this->db->query('UPDATE produit SET libelle_produit=:libelle_produit,price_produit=:price_produit ,quantite_produit=:quantite_produit WHERE id_produit = :id');

      }


     $this->db->bind(':id', $data['id_produit']);
    $this->db->bind(':quantite_produit',$data['quantite_produit']);
    // $this->db->bind(':img_produit', $data['img_produit']);
    $this->db->bind(':libelle_produit', $data['libelle_produit']);
    $this->db->bind(':price_produit', $data['price_produit']);

    // Execute
    if($this->db->execute()){ 
      return true;
    } else {
      return false;
    }
    
     
    }

     public function getProduitById($id_produit)
    {
        $this->db->query('SELECT * FROM produit WHERE id_produit=:id');
        $this->db->bind(':id', $id_produit);
       
        $row = $this->db->single();

    return $row;

    }

  
    }

   