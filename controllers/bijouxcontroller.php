<?php
class BijouxController{
    /////////////////////////////////////////////

    public function GetAllBijoux(){//function
        $bijoux = Bijoux::getAll();
        return $bijoux ;
    }
    //////////////////////////////////////////////

    public function addBijoux(){
        if(isset($_POST['submit'])){
            $data = array(
                'nom_produit' => $_POST['nom_produit'],
                'prix' => $_POST['prix'],
                'quantite' => $_POST['quantite'],
                'image' => $_FILES['image']['name'],
               
            );
            $result = Bijoux::add($data);
            if($result === 'ok'){
                session::set('success','le produit est ajoute');
                Redirect::to('admin');
            }else{
                echo $result;
            }
        }

}
/////findBijoux////////////////////////////////////////
 public function findBijoux(){
    if(isset($_POST['search'])){
        $data=array('search'=>$_POST['search']);
     }
        $bijoux=Bijoux::searchBijoux($data);
        return $bijoux;
       
 }
/////////////////////////////////////////////////////////

////////////////////////////////////////////////////

public function updateBijoux(){
    
    if(isset($_POST['submit'])){
        $data = array(
            'id'=>$_POST['id'],
            'nom_produit' => $_POST['nom_produit'],
            'prix' => $_POST['prix'],
            'quantite' => $_POST['quantite'],
            'image' => $_FILES['image']['name'],
           
        );
        $result = Bijoux::update($data);
        if($result === 'ok'){
            session::set('success','le produit est modifier');
                Redirect::to('admin');
        }else{
            echo $result;
        }
    }

}



//////////////////////////////////////////////////////////
public function getOneBijoux(){
    if(isset($_POST['id'])){
        $data = array(
            'id' => $_POST['id']
        );
    
        $bijoux = Bijoux::getBijoux($data);
        return $bijoux;
    }
}
 
//delete bijoux function//////////////////////////////////////////////////

public function deleteBijoux(){
     if(isset($_POST['id'])){
        $data['id']=$_POST['id'];
        $result = Bijoux::supp($data);
        if($result === 'ok'){
            session::set('success','le produit est supprimer');
            Redirect::to('admin');
        }else{
            echo $result;
        }
     }
}
public function afficheBijoux(){

}
////////////////////////////////////////////////////////////////////////////////
}
// function updateview(){
    
// }

//////////////////////////////////////////////////////////////////////////////////////////
function deleteView(){
    if(isset($_POST['id'])){
        $exitbijoux = new BijouxController();
        $exitbijoux->deleteBijoux();
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////

$prods = new BijouxController();
$bijouxx=$prods->GetAllBijoux();


function zzz(){
    if($_SESSION['login'] == false && $_GET['page'] === 'add'){
        header("location:login");
    }
}
zzz();

?>