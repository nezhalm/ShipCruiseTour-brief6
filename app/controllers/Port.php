<?php
  class Pages extends Controller {
    public function __construct(){
     
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
      $this->view('pages/adminnavire');
      
    }
    public function adminport(){
      $this->view('pages/adminport');
      
    }
    
    public function admincroisier(){
      $this->view('pages/admincroisier');
      
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
