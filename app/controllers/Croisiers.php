<?php
  class Croisiers extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->croisierModel = $this->model('Croisier');
      $this->navireModel = $this->model('Navire');
      $this->portModel = $this->model('Port');
      $this->userModel = $this->model('User');
    }

    public  function index(){
      // Get posts
       $croisier = $this->croisierModel->getCroisier();
    
      $data = [
        'croisier' => $croisier
      ];

      $this->view('pages/admincroisier', $data);
    }

    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'prix' => trim($_POST['prix']),
          'image' => $_POST['image'],
          'nombre_nuit' => $_POST['nombre_nuit'],
          'date_depart' => trim($_POST['date_depart']),
         
          'ship_id' => $_POST['ship_id'],
          'prix_err' => '',
          'image_err' => '',
          'nombre_nuit_err' => '',
          'date_depart_err' => '',
          'ship_id_err' => ''
        ];

        // Validate data
        if(empty($data['prix'])){
          $data['prix_err'] = 'entrer un prix';
        }
        if(empty($data['image'])){
          $data['image_err'] = 'entrer une image';
        }
        if(empty($data['nombre_nuit'])){
          $data['nombre_nuit_err'] = 'entrer le nombre de nuits';
        }
        if(empty($data['date_depart'])){
          $data['date_depart_err'] = 'entrer un date de depart';
        }
        if(empty($data['ship_id'])){
          $data['ship_id_err'] = 'entrer un navire';
        }
     
        // Make sure no errors
        if(empty($data['prix_err']) && empty($data['image_err']) && empty($data['nombre_nuit_err']) && empty($data['date_depart_err']) && empty($data['ship_id_err'])){
          // Validated
          if($this->croisierModel->addCruise($data)){
            flash('post_message', 'croisiere ajouter avec succes');
            redirect('croisiers');
          } else {
            die('erreur');
          }
        } else {
          // Load view with errors
          $this->view('croisiers/addcroisier', $data);
        }

      } else {
      $navires = $this->navireModel->getNavire();
      $ports = $this->portModel->getPort();
        $data = [
          'prix' => '',
          'image' => '',
          'nombre_nuit' => '',
          'date_depart' => '',
          'ship_id' => '',
          'navires' => $navires,
          'port' => $ports
        ];


  
        $this->view('croisiers/addcroisier', $data);

      }
    }

    public function edit($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'id' => $id,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'user_id' => $_SESSION['id'],
          'title_err' => '',
          'body_err' => ''
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Please enter title';
        }
        if(empty($data['body'])){
          $data['body_err'] = 'Please enter body text';
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->croisierModel->updatePost($data)){
            flash('post_message', 'Post Updated');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/edit', $data);
        }

      } else {
        // Get existing post from model
        $post = $this->postModel->getPostById($id);

        // Check for owner
        if($post->user_id != $_SESSION['user_id']){
          redirect('posts');
        }

        $data = [
          'id' => $id,
          'title' => $post->title,
          'body' => $post->body
        ];
  
        $this->view('posts/edit', $data);
      }
    }

    public function show($id){
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);

      $data = [
        'post' => $post,
        'user' => $user
      ];

      $this->view('posts/show', $data);
    }

    public function delete($id){
   
        if($this->croisierModel->deleteCroisier($id)){
         redirect('pages/admincroisier');
        }else{
         redirect('pages/admincroisier');
        } 
    }
  }