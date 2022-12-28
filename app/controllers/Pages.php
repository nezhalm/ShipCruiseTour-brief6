<?php
  class Pages extends Controller {
    public function __construct(){
      $this->croisierModel = $this->model('Croisier');
      $this->userModel = $this->model('User');
      $this->navireModel = $this->model('Navire');
      $this->portModel = $this->model('Port');

      
    }
    
    public function index(){
      if(isLoggedIn()){
        $this->view('pages/index');
        // redirect('pages/index');
      }

     
      $this->view('pages/index');
    }

    public function about(){
     
      $this->view('pages/about');

    }
    public function contact(){
     
    
      $this->view('pages/contact');
      
    }
    public function reserve(){
      $this->view('pages/reserve');
      
    }
    public function ship(){
      $this->view('pages/ship');
      
    }
    public function admin(){
      $this->view('pages/admin');
      
    }
    public function register(){
      $this->view('pages/register');
      
    }
    public function adminnavire(){

            // Get posts
            $navire = $this->navireModel->getNavire();

            $data = [
              'navire' => $navire
            ];
                       
      $this->view('pages/adminnavire',$data);
      
    }
    public function adminport(){
            // Get posts
            $port = $this->portModel->getPort();

            $data = [
              'port' => $port
            ];
             
          
      $this->view('pages/adminport',$data);
      
    }
    
    public function admincroisier(){
      $croisier = $this->croisierModel->getCroisier();

      $data = [
        'croisier' => $croisier
      ];
       
      $this->view('pages/admincroisier',$data);
      
    }
    public function addnavire(){
      $this->view('croisier/adminnavire');
      
    }
    public function addport(){
      $this->view('croisier/adminport');
      
    }
    
    public function addcroisier(){
      $this->view('croisier/admincroisier');
      
    }

  }
