<?php
class Pages extends Controller
{

  private $userModel;

  private $produitModel;

//////////////////////////////////////////////////////


  public function __construct()
  {
    $this->userModel = $this->model('User');

    $this->produitModel = $this->model('Produit');
  }
//////////////////////////////////////////////////////

  public function index()
  {
    if (isLoggedIn()) {
      $this->view('pages/index');
      // redirect('pages/index');
    }
    $this->view('pages/index');
  }

  // /////////////////////////////////////////////////
  public function about()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $this->view('pages/about');
  }
//////////////////////////////////////////////////////
  public function stat()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $nb = $this->produitModel->nombreProduit();
    $prix = $this->produitModel->prixProduit();
    $prixmin = $this->produitModel->prixminProduit();
    $prixsomme = $this->produitModel->sommeProduit();
    $data = [
      'nb' => $nb,
      'prix' => $prix,
      'prixmin' => $prixmin,
      'prixsomme' => $prixsomme,
    ];

    $this->view('pages/stat', $data);
  }
//////////////////////////////////////////////////////

  public function contact()
  {

    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $this->view('pages/contact');
  }

//////////////////////////////////////////////////////

  public function adminproduit()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    // Get posts
    $produit = $this->produitModel->getProduit();

    $data = [
      'produit' => $produit,
    ];


    $this->view('pages/adminproduit', $data);
  
  }
  //////////////////////////////////////////////////////

  

  public function table()
  {
    if(!isset($_SESSION['user_id'])){
      redirect('users/login');}
    $produit = $this->produitModel->getProduit();

    $data = [
      'produit' => $produit,
    ];


    $this->view('pages/table', $data);
  }

}
