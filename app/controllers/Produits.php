<?php
  class Produits extends Controller {
  private $produitModel;
  private $userModel;
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->produitModel = $this->model('Produit');
      $this->userModel = $this->model('User');
    }

    public  function index(){
      // Get posts
       $produit = $this->produitModel->getProduit();

      $data = [
        'produit' => $produit
      ];
       
      $this->view('pages/adminproduit', $data);
    }

    public function getOneProduit(){
    
      if(isset($_POST['id_produit'])){
        
          $var = $this->produitModel->getOne($_POST['id_produit']);
          
          $data = [
            'libelle_produit'=>$var->libelle_produit,
            'price_produit'=>$var->price_produit,
              'quantite_produit'=>$var->quantite_produit,
              'img_produit'=>$var->img_produit,
    
          ];
        
          $this->view('pages/updateproduit',$data);
          
      }
  }

    public function add(){
   
      if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'libelle_produit' => trim($_POST['libelle_produit']),
        'img_produit' => $_POST['img_produit'],
        'quantite_produit' => $_POST['quantite_produit'],
        'price_produit' => trim($_POST['price_produit']), 
       
      ];
       $produit = $this->produitModel->addProduit($data);

  if($produit){
    flash('regiter_success', 'product added');
    redirect('pages/adminproduit');
  } else {
    die('Something went wrong');
  }
}
       else {
     
      
        $data = [
          'libelle_produit' => '',
          'img_produit' => '',
          'quantite_produit' => '',
          'price_produit' => '',
         
       
        ];
        $this->view('pages/addproduit', $data);

      }
    }
    //////////////////////////////////////////////////////



//     public function updateproduit($id){
//       if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         // Sanitize POST array
//         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//       $data = [
//         'libelle_produit' => trim($_POST['libelle_produit']),
//         'img_produit' => $_POST['img_produit'],
//         'quantite_produit' => $_POST['quantite_produit'],
//         'price_produit' => trim($_POST['price_produit']),
//         'id_produit' => trim($_POST['id_produit']),

//       ];
//       $produit = $this->produitModel->update($data['id_produit']);
//       $this->view('pages/updateproduit', $produit);

//       } else {
 
      
//         $data = [
//           'libelle_produit' =>'' ,
//           'img_produit' => '',
//           'quantite_produit' => '',
//           'price_produit' => '',
      
       
//         ];
//         $this->view('pages/updateproduit', $data);

//       }

// }

public function edit($id_produit){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $data = [
      'id_produit' => $id_produit,
      'libelle_produit' => trim($_POST['libelle_produit']),
      'quantite_produit' => $_POST['quantite_produit'],
      'price_produit' => $_POST['price_produit'],
      'img_produit' => $_POST['img_produit'],
     
    ];

  
      if($this->produitModel->updateProduit($data)){
        flash('register_success', 'product updated');
        redirect('pages/adminproduit');
      } else {
        die('Something went wrong');
      }
   

  } else {
    // Get existing post from model
    $produit = $this->produitModel->getProduitById($id_produit);

    // Check for owner
   

    $data = [
      'id_produit' => $id_produit,
      'libelle_produit' => $produit->libelle_produit,
      'price_produit' => $produit->price_produit,
      'img_produit' => $produit->img_produit,
      'quantite_produit' => $produit->quantite_produit
    ];

    $this->view('pages/updateproduit', $data);
  }
}

// public  function updateInstance()
// {
//     if (isset($_POST['id_produit'])) {
//       $produit = $this->produitModel->getOneProduit();
//     }

//     if (isset($_POST['submit'])) {
//       $this->produitModel->updateproduit();

      
//     }
//     return isset($_POST['id']) ? $produit : false;
   
// }


    public function delete($id){
   
        if($this->produitModel->deleteProduit($id)){
          flash('register_success', 'product deleted');

         redirect('pages/adminproduit');
        }else{
         redirect('pages/adminproduit');
        } 
    }
//////////////////////////////////////////////////////

    public function stat(){
    
      $nb = $this->produitModel->nombreProduit();
      $prix = $this->produitModel->prixProduit();
  
      $data = [
        'nb' => $nb,
        'prix' => $prix
      ];

      $this->view('pages/stat', $data);
     
  }
//////////////////////////////////////////////////////

  public function tridecroissant(){
    
      $produit = $this->produitModel->tridecProduit();
  
      $data = [
        'produit' => $produit,
      ];

      $this->view('pages/adminproduit', $data);
     
  }
//////////////////////////////////////////////////////

 
//////////////////////////////////////////////////////

  public function tricroissant(){
    
    $produit = $this->produitModel->tricProduit();

    $data = [
      'produit' => $produit,
    ];

    $this->view('pages/adminproduit', $data);
   
}

public function tridecroissant_date(){
    
  $produit = $this->produitModel->tridecProduit_date();

  $data = [
    'produit' => $produit,
  ];

  $this->view('pages/adminproduit', $data);
 
}


public function tricroissant_date(){
    
  $produit = $this->produitModel->tricProduit_date();

  $data = [
    'produit' => $produit,
  ];

  $this->view('pages/adminproduit', $data);
 
} 

public function searchProduit(){ 
  if(isset($_POST["submit"])){
    // Sanitize POST array
      $var = $_POST['search'];
      $produit = $this->produitModel->search($var);
      $data = [
        'produit' => $produit,
      ];
      $this->view('pages/adminproduit', $data);
    }

} 

}


