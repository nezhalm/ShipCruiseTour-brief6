<?php
class Bijoux
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM reservation');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    ///////////////////////////////////////////////////

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO  bijoux(nom_produit,quantite,prix,image) VALUES (:nom_produit,:quantite,:prix,:image)');

        $stmt->bindParam(':nom_produit', $data['nom_produit']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':quantite', $data['quantite']);
        // $stmt->bindParam(':image', "hghg");
        $stmt->bindParam(':image', $data['image']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
    ////////////////////////////////////////////////////////////

    static public function update($data)
    {
     
        $stmt = DB::connect()->prepare('UPDATE bijoux SET nom_produit=:nom_produit,quantite=:quantite,prix=:prix,image = :image WHERE id = :id');
        $stmt->bindParam('id', $data['id']);
        $stmt->bindParam(':nom_produit', $data['nom_produit']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':quantite', $data['quantite']);
        $stmt->bindParam(':image', $data['image']);
      
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    ///////RECUPERE LES INFORMATION DUN PRODUIT////////////////////

    static public function getBijoux()
    {
        $id = $_POST['id'];
        try {
            $query = 'SELECT * FROM bijoux WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            // baramettre binding
            $stmt->execute(array(":id" => $id));
            //on le recupere sous forme dun object
            $bijoux = $stmt->fetch(PDO::FETCH_OBJ);
            return $bijoux;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }
    ////////////////////SUPPRESSION///////////////////////////////////////
    static public function supp($data)
    {

        $id = $data['id'];

        try {

            $stmt = DB::connect()->prepare('DELETE FROM bijoux WHERE id=:id');
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOExeption $e) {
            echo 'erreur' . $e->getMessage();
        }
    }
    ////////////////////////////////////////////////// 

    /////////searchBijoux////////////////////////////
    static public function searchBijoux($data)
    {
        $search = $data['search'];
        try {

            $stmt = DB::connect()->prepare('SELECT * FROM bijoux WHERE nom_produit LIKE ? ');
            $stmt->execute(array('%' . $search . '%'));
            $bijoux = $stmt->fetchAll();
            return $bijoux;
        } catch (PDOExeption $e) {
            echo 'erreur' . $e->getMessage();
        }
    }
}
 /////////////////////////////////////////////////////  
