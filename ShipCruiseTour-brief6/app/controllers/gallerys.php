<?php
  class Croisiers extends Controller {
    private $croisierModel;
    private $navireModel;
    private $portModel;
    private $userModel;
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->croisierModel = $this->model('Croisier');
      $this->navireModel = $this->model('Navire');
      $this->portModel = $this->model('Port');
      $this->userModel = $this->model('User');
    }

    
    // fontion qui affiche 
    public  function affiche_produits_ship(){
      // Get posts
       $croisier = $this->croisierModel->getCroisier();
    
      $data = [
        'croisier' => $croisier
      ];

      $this->view('pages/ship', $data);
    }
   
    public  function filter_navire(){
        // Get posts
         $navire = $this->navireModel->getNavire();
      
        $data = [
          'navire' => $navire
        ];
  
        $this->view('pages/ship', $data);
      }
   

   
  }