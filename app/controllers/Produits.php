<?php
class Produits extends Controller
{
  private $produitModel;
  private $userModel;
  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    }
    $this->produitModel = $this->model('Produit');
    $this->userModel = $this->model('User');
  }
  /////////////////////////////////////////////////////////////////////////
  public function index()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    // Get posts
    $produit = $this->produitModel->getProduit();

    $data = [
      'produit' => $produit
    ];

    $this->view('pages/adminproduit', $data);
  }
  //////////////////////////////////////////////////////////////////////////
  public function getOneProduit()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}

    if (isset($_POST['id_produit'])) {

      $var = $this->produitModel->getOne($_POST['id_produit']);

      $data = [
        'libelle_produit' => $var->libelle_produit,
        'price_produit' => $var->price_produit,
        'quantite_produit' => $var->quantite_produit,
        'img_produit' => $var->img_produit,

      ];

      $this->view('pages/updateproduit', $data);

    }
  }
  //////////////////////////////////////////////////////////////////////////

  public function add()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $cpt = count($_POST["libelle_produit"]);
      $cpt = empty($_POST["libelle_produit"][1]) ? --$cpt : $cpt;
      for ($i = 0; $i < $cpt; $i++) {
        $data = [
          'libelle_produit' => trim($_POST['libelle_produit'][$i]),
          'img_produit' => $_POST['img_produit'][$i],
          'quantite_produit' => $_POST['quantite_produit'][$i],
          'price_produit' => trim($_POST['price_produit'][$i]),
        ];
        $produit = $this->produitModel->addProduit($data);
      }

      if ($produit) {

        flash('regiter_success', 'product added');
        redirect('pages/adminproduit');
      } else {
        die('Something went wrong');
      }
    } else {


      $data = [
        'libelle_produit' => '',
        'img_produit' => '',
        'quantite_produit' => '',
        'price_produit' => '',


      ];
      $this->view('pages/addproduit', $data);

  }
  }
  ///////////////////////////////////////////////////////////////




  public function edit($id)
  {
   
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
        $data = [
          'id_produit' => $id,
          'libelle_produit' => trim($_POST['libelle_produit']),
          'quantite_produit' => $_POST['quantite_produit'],
          'price_produit' => $_POST['price_produit'],
  
        ];
        if (!empty($_FILES['img_produit']['name'])) {
          $data['img_produit'] = $_FILES['img_produit'];
        } else {
  
        }
        $result = $this->produitModel->updateProduit($data);
        if ($result) {
          flash('register_success', 'product updated');
          redirect('pages/adminproduit');
        } else {
          die('Something went wrong');
        }
  
  
      } else {
        $produit = $this->produitModel->getProduitById($id);
  
  
  
        $data = [
          'id_produit' => $produit->id_produit,
          'libelle_produit' => $produit->libelle_produit,
          'price_produit' => $produit->price_produit,
          'img_produit' => $produit->img_produit,
          'quantite_produit' => $produit->quantite_produit
        ];
  
        $this->view('pages/updateproduit', $data);
      }
  }
  ////////////////////////////////////////////////////////
  public function delete($id)
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    if ($this->produitModel->deleteProduit($id)) {
      flash('register_success', 'product deleted');

      redirect('pages/adminproduit');
    } else {
      redirect('pages/adminproduit');
    }
  }
  //////////////////////////////////////////////////////




  public function tridecroissant()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $produit = $this->produitModel->tridecProduit();

    $data = [
      'produit' => $produit,
    ];

    $this->view('pages/adminproduit', $data);

  }
  //////////////////////////////////////////////////////


  //////////////////////////////////////////////////////

  public function tricroissant()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $produit = $this->produitModel->tricProduit();

    $data = [
      'produit' => $produit,
    ];

    $this->view('pages/adminproduit', $data);

  }
  //////////////////////////////////////////////////////////////////////////

  public function tridecroissant_date()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $produit = $this->produitModel->tridecProduit_date();

    $data = [
      'produit' => $produit,
    ];

    $this->view('pages/adminproduit', $data);

  }

  //////////////////////////////////////////////////////////////////////////

  public function tricroissant_date()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $produit = $this->produitModel->tricProduit_date();

    $data = [
      'produit' => $produit,
    ];

    $this->view('pages/adminproduit', $data);

  }
  //////////////////////////////////////////////////////////////////////////

  public function searchProduit()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    if (isset($_POST["submit"])) {
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