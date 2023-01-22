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

    $this->view('pages/about');
  }
//////////////////////////////////////////////////////
  public function stat()
  {

    $nb = $this->produitModel->nombreProduit();
    $prix = $this->produitModel->prixProduit();

    $data = [
      'nb' => $nb,
      'prix' => $prix
    ];

    $this->view('pages/stat', $data);
  }
//////////////////////////////////////////////////////

  public function contact()
  {


    $this->view('pages/contact');
  }

//////////////////////////////////////////////////////

  public function adminproduit()
  {
    // Get posts
    $produit = $this->produitModel->getProduit();

    $data = [
      'produit' => $produit,
    ];


    $this->view('pages/adminproduit', $data);
  
  }
  //////////////////////////////////////////////////////

  
  //////////////////////////////////////////////////////
  public function table()
  {

    $produit = $this->produitModel->getProduit();

    $data = [
      'produit' => $produit,
    ];


    $this->view('pages/table', $data);
  }

}
