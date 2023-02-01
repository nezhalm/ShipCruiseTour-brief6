<?php
  class Croisier {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function addCruise($data){
     
      $this->db->query('INSERT INTO croisier (prix, image ,nombre_nuit,date_depart ,ship_id,id_port_depart,itenaire1,itenaire2,itenaire3) VALUES(:prix,:image ,:nombre_nuit,:date_depart, :ship_id,:id_port_depart,:itenaire1,:itenaire2,:itenaire3)');
      // Bind values
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':nombre_nuit', $data['nombre_nuit']);
      $this->db->bind(':date_depart', $data['date_depart']);
      $this->db->bind(':ship_id', $data['ship_id']);
      $this->db->bind(':id_port_depart', $data['id_port_depart']);
      $this->db->bind(':itenaire1', $data['itenaire1']);
      $this->db->bind(':itenaire2', $data['itenaire2']);
      $this->db->bind(':itenaire3', $data['itenaire3']);
      
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  
    public function getCroisier(){
      $this->db->query(' SELECT croisier.id as crId , croisier.prix , croisier.image ,
       croisier.nombre_nuit ,croisier.itenaire1,croisier.itenaire2,croisier.itenaire3,
       croisier.date_depart , croisier.ship_id , croisier.id_port_depart , navire.id,navire.nombre_place , navire.nombre_chambre,
       navire.nom as "navire_nom" , port.id,port.nom as "port_nom" from croisier ,
       navire , port where croisier.ship_id = navire.id and  navire.nombre_place>0 and  navire.nombre_chambre>0 and  croisier.id_port_depart
       = port.id and CURRENT_DATE <= croisier.date_depart order by prix ASC ');
      $row = $this->db->resultSet();
      if ($row) {
          return $row;
      } else {
          return false;
      }
    }

     public function getCroisierbyid($id){
      $this->db->query('SELECT croisier.id as "crId" , croisier.prix , croisier.image ,
       croisier.nombre_nuit ,croisier.itenaire1,croisier.itenaire2,croisier.itenaire3,
       croisier.date_depart , croisier.ship_id , croisier.id_port_depart , navire.id as "idi",navire.nombre_place as "nezha", navire.nombre_chambre AS chambre,
       navire.nom as "navire_nom" , port.id,port.nom as "port_nom" from croisier inner join 
       navire on croisier.ship_id = navire.id inner join port on croisier.id_port_depart
       = port.id and CURRENT_DATE <= croisier.date_depart  and  croisier.id = :id order by prix ASC');
      $this->db->bind(':id', $id);
       $this->db->execute();
      $row = $this->db->resultSet();


      if ($row) {
          return $row;
         
      } else {
          return false;
      }

    }
    public function getpagination(){
      $this->db->query('SELECT count(id) AS cpt FROM croisier ');
      $cpt = $this->db->resultSet();
   
      if ($cpt) {
          return $cpt;
      } else {
          return false;
      }

    }




    public function getCroisier_filter_navire($id){
      $this->db->query('SELECT croisier.id as crId , croisier.prix , croisier.image , croisier.nombre_nuit , croisier.date_depart , croisier.ship_id , croisier.id_port_depart ,croisier.itenaire1,croisier.itenaire2,croisier.itenaire3, navire.id , navire.nom as "navire_nom" , port.id,port.nom as "port_nom" from croisier , navire , port where croisier.ship_id = navire.id and croisier.id_port_depart = port.id and navire.id=:id and    CURRENT_DATE <= croisier.date_depart');
      $this->db->bind(':id', $id);
        $row = $this->db->resultSet();
  
        if ($row) {
            return $row;
        } else {
            return false;
        }
  
      }
     // filter par port////////////////////////////////////////////////////////////////

      public function getCroisier_filter_port($id){
        $this->db->query('SELECT croisier.id as crId , croisier.prix , croisier.image , croisier.nombre_nuit , croisier.date_depart , croisier.ship_id , croisier.id_port_depart ,croisier.itenaire1,croisier.itenaire2,croisier.itenaire3, navire.id , navire.nom as "navire_nom" , port.id,port.nom as "port_nom" from croisier , navire , port where croisier.ship_id = navire.id and croisier.id_port_depart = port.id and port.id=:id and CURRENT_DATE <=croisier.date_depart');
        $this->db->bind(':id', $id);
          $row = $this->db->resultSet();
    
          if ($row) {
              return $row;
          } else {
              return false;
          }
    
        }
       
        // filter par mois////////////////////////////////////////////////////
        public function getCroisier_filter_month($i){
          $this->db->query('SELECT croisier.id as crId , croisier.prix , croisier.image , croisier.nombre_nuit , croisier.date_depart , croisier.ship_id , croisier.id_port_depart,croisier.itenaire1,croisier.itenaire2,croisier.itenaire3 , navire.id , navire.nom as "navire_nom" , port.id,port.nom as "port_nom" from croisier , navire , port where croisier.ship_id = navire.id and croisier.id_port_depart = port.id and MONTH(date_depart) =:id and    CURRENT_DATE <= croisier.date_depart');
          $this->db->bind(':id', $i);
            $row = $this->db->resultSet();
      
            if ($row) {
                return $row;
            } else {
                return false;
            }
      
          }

       

    public function deleteCroisier($id)
    {
      $this->db->query('DELETE FROM `croisier` WHERE `id`=:id');
      $this->db->bind(':id', $id);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function isCancellable($idcr){
      $this->db->query('SELECT date_depart  FROM croisier WHERE id = :id');
      $this->db->bind(':id', $idcr); 
      $count = $this->db->single();
      if($count->date_depart>date('Y-m-d',strtotime(date('Y-m-d').'+ 2 days'))) {
        return true;
      } else {
          return false;
      }
    }

     }

   