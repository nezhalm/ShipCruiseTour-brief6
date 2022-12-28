<?php
  class Ports extends Controller {
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

    public function delete($id){
   
        if($this->portModel->deletePort($id)){
         redirect('pages/adminport');
        }else{
         redirect('pages/adminport');
        } 
    }
  }

//     public function edit($id){
//       if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         // Sanitize POST array
//         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//         $data = [
//           'id' => $id,
//           'title' => trim($_POST['title']),
//           'body' => trim($_POST['body']),
//           'user_id' => $_SESSION['user_id'],
//           'title_err' => '',
//           'body_err' => ''
//         ];

//         // Validate data
//         if(empty($data['title'])){
//           $data['title_err'] = 'Please enter title';
//         }
//         if(empty($data['body'])){
//           $data['body_err'] = 'Please enter body text';
//         }

//         // Make sure no errors
//         if(empty($data['title_err']) && empty($data['body_err'])){
//           // Validated
//           if($this->croisierModel->updatePost($data)){
//             flash('post_message', 'Post Updated');
//             redirect('posts');
//           } else {
//             die('Something went wrong');
//           }
//         } else {
//           // Load view with errors
//           $this->view('posts/edit', $data);
//         }

//       } else {
//         // Get existing post from model
//         $post = $this->postModel->getPostById($id);

//         // Check for owner
//         if($post->user_id != $_SESSION['user_id']){
//           redirect('posts');
//         }

//         $data = [
//           'id' => $id,
//           'title' => $post->title,
//           'body' => $post->body
//         ];
  
//         $this->view('posts/edit', $data);
//       }
//     }

//     public function show($id){
//       $post = $this->postModel->getPostById($id);
//       $user = $this->userModel->getUserById($post->user_id);

//       $data = [
//         'post' => $post,
//         'user' => $user
//       ];

//       $this->view('posts/show', $data);
//     }

//     public function delete($id){
//       if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         // Get existing post from model
//         $post = $this->postModel->getPostById($id);
        
//         // Check for owner
//         if($post->user_id != $_SESSION['user_id']){
//           redirect('posts');
//         }

//         if($this->postModel->deletePost($id)){
//           flash('post_message', 'Post Removed');
//           redirect('posts');
//         } else {
//           die('Something went wrong');
//         }
//       } else {
//         redirect('posts');
//       }
//     }
   