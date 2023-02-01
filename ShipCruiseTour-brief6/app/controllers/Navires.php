<?php
  class Navires extends Controller {
    private $croisierModel;
    private $navireModel;
    private $portModel;
    private $userModel;
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->navireModel = $this->model('Navire');
      $this->userModel = $this->model('User');
    }

    public  function index(){
      // Get posts
       $navire = $this->navireModel->getNavire();

      $data = [
        'navire' => $navire
      ];

      $this->view('pages/adminnavire', $data);
    }

    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'nom' => trim($_POST['nom']),
          'nombre_place' => $_POST['nombre_place'],
          'nombre_chambre' => $_POST['nombre_chambre'],
          'nom_err' => '',
          'nombre_place_err' => '',
          'nombre_chambre_err' => ''
        ];

        // Validate data
        if(empty($data['nom'])){
          $data['nom_err'] = 'entrer le nom du navire';
        }
        if(empty($data['nombre_place'])){
          $data['nombre_place_err'] = 'entrer le nombre des places';
        }
        if(empty($data['nombre_chambre'])){
          $data['nombre_chambre_err'] = 'entrer le nombre de chambres';
        }
      
     
        // Make sure no errors
        if(empty($data['nom_err']) && empty($data['nombre_place_err']) && empty($data['nombre_chambre_err']) ){
          // Validated
          if($this->navireModel->addNavire($data)){
            flash('post_message', 'croisiere ajouter avec succes');
            redirect('navires');
          } else {
            die('erreur');
          }
        } else {
          // Load view with errors
          $this->view('croisiers/addnavire', $data);
        }

      } else {
        $data = [
          'nom' => '',
          'nombre_place' => '',
          'nombre_chambre' => ''
         
        ];
  
        $this->view('croisiers/addnavire', $data);
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
public function delete($id){
   
    if($this->navireModel->deleteNavire($id)){
      flash('register_success', 'navire est supprime');
     redirect('pages/adminnavire');
    }else{
     redirect('pages/adminnavire');
    } 
}
   }