<?php

class reservation
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addReservation($data)
    {
        if (!empty($_SESSION['user_id'])) {
            $this->db->query('INSERT INTO reservation (reservation_date,prix_reservation ,user_id,id_croisier,`type_ch`) VALUES(:reservation_date ,:prix_reservation,:user_id,:id_croisier,:type_ch)');
            // Bind values
            $this->db->bind(':reservation_date', $data['date']);
            $this->db->bind(':id_croisier', $data['cruise']);
            $this->db->bind(':prix_reservation', $data['prix']);
            $this->db->bind(':user_id', $data['user']);
            $this->db->bind(':type_ch', $data['room']);
            // Execute
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            redirect('users/login');
        }
    }


  

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updatecapacity($navire,$nombre_place,$nombre_chambre)
    {
      $this->db->query('UPDATE navire
       set nombre_place=:nombre_place , nombre_chambre=:nombre_chambre  WHERE nom=:nom;
    ');
            $this->db->bind(':nombre_place', $nombre_place);
             $this->db->bind(':nombre_chambre', $nombre_chambre);
            $this->db->bind(':nom', $navire);
            $row = $this->db->resultSet();
           
        if ($row) {
            return $row;

        } else {
            return false;
        }
    }

    public function getReservations()
    {
        $this->db->query('SELECT reservation.id AS idre, reservation.prix_reservation, reservation.user_id, reservation.reservation_date,
         reservation.id_croisier, reservation.type_ch, type_chambre.name AS "chambre_nom", croisier.id AS idcroi,croisier.image AS img , useer.id AS idu FROM
          reservation, type_chambre, croisier, useer 
        WHERE reservation.type_ch = type_chambre.id AND reservation.id_croisier = croisier.id AND reservation.user_id = useer.id AND    CURRENT_DATE <= reservation.reservation_date
        ');

  
       
        $row = $this->db->resultSet();

        if ($row) {
            return $row;

        } else {
            return false;
        }

    }
    //////////////////////////////////////////////////////

  public function getReservationsAfterCancel($id)
    {
        $this->db->query('SELECT reservation.id AS idre, reservation.prix_reservation, reservation.user_id, reservation.reservation_date,
         reservation.id_croisier, reservation.type_ch, type_chambre.name  AS "chambre_nom" ,croisier.id AS idcroi, useer.id AS idu FROM
          reservation, type_chambre, croisier, useer 
        WHERE reservation.type_ch = type_chambre.id AND reservation.id_croisier = croisier.id AND reservation.id_croisier != :id  AND reservation.user_id = useer.id AND    CURRENT_DATE <= reservation.reservation_date
        ');

  
        $this->db->bind(':id', $id);
        $row = $this->db->resultSet();

        if ($row) {
            return $row;

        } else {
            return false;
        }

    }

    ////////////////////////////////////////////////////////////////////////////////////////
    public function invalidDeleteReservation($idr)
    {

        $this->db->query('DELETE  FROM reservation WHERE id = :id');
        $this->db->bind(':id', $idr);
        $this->db->execute();

    }
    /////////////////////////////////////////////////////////////////////////////////////
    public function deleteReservation($idre)
    {
        $this->db->query('DELETE FROM reservation WHERE id = :id');
        $this->db->bind(':id',$idre);
        $this->db->execute();
    }
    public function getChambre()
    {
        $this->db->query('SELECT * FROM type_chambre');

        $row = $this->db->resultSet();

        if ($row) {
            return $row;
        } else {
            return false;
        }

    }

    public function getIdCroisiere($idre)
    {
        $this->db->query('SELECT reservation.id_croisier as idcr from reservation where id = :id');
        $this->db->bind(':id', $idre);
        $row = $this->db->single();

        return $row->idcr;

    }

}
