<?php
  class Ports extends Controller {
    private $croisierModel;
    private $navireModel;
    private $portModel;
    private $userModel;
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->portModel = $this->model('Port');
      $this->userModel = $this->model('User');
    }

    public  function index(){
      // Get posts
       $port = $this->portModel->getPort();

      $data = [
        'port' => $port
      ];
       
      $this->view('pages/adminport', $data);
    }

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'nom' => trim($_POST['nom']),
          'pays' => $_POST['pays'],
         
          'nom_err' => '',
          'pays_err' => ''
        ];

        // Validate data
        if(empty($data['nom'])){
          $data['nom_err'] = 'entrer le nom du navire';
        }
        if(empty($data['pays'])){
          $data['pays_err'] = 'entrer le nombre des places';
        }
      
      
     
        // Make sure no errors
        if(empty($data['nom_err']) && empty($data['pays_err']) ){
          // Validated
          if($this->portModel->addPort($data)){
            flash('post_message','port ajouter avec success');
            redirect('ports');
          } else {
            die('erreur');
          }
        } else {
          // Load view with errors
          $this->view('croisiers/addport', $data);
        }

      } else {
        $data = [
          'nom' => '',
          'pays' => ''
        ];
  
        $this->view('croisiers/addport', $data);
      }
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function delete($id){
   
        if($this->portModel->deletePort($id)){
          flash('register_success', 'port est supprime');
         redirect('pages/adminport');
        }else{
         redirect('pages/adminport');
        } 
    }
  }

