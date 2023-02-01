<?php
class Croisiers extends Controller
{
  private $croisierModel;
  private $navireModel;
  private $portModel;
  private $userModel;
  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    }

    $this->croisierModel = $this->model('Croisier');
    $this->navireModel = $this->model('Navire');
    $this->portModel = $this->model('Port');
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    // Get posts
    $croisier = $this->croisierModel->getCroisier();

    $data = [
      'croisier' => $croisier
    ];

    $this->view('pages/admincroisier', $data);
  }
 
  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $navires = $this->navireModel->getNavire();
      $ports = $this->portModel->getPort();
      $data = [
        'prix' => trim($_POST['prix']),
        'image' => $_POST['image'],
        'nombre_nuit' => $_POST['nombre_nuit'],
        'date_depart' => trim($_POST['date_depart']),
        'id_port_depart' => ($_POST['id_port_depart']),
        'ship_id' => $_POST['ship_id'],
        'itenaire1' => $_POST['itenaire1'],
        'itenaire2' => $_POST['itenaire2'],
        'itenaire3' => $_POST['itenaire3'],
        'prix_err' => '',
        'image_err' => '',
        'nombre_nuit_err' => '',
        'itenaire1_err' => '',
        'itenaire2_err' => '',
        'itenaire3_err' => '',
        'date_depart_err' => '',
        'navire' => $navires,
        'port' => $ports

      ];
      $date = date($data['date_depart']);
      $dateArray = explode('-', $date);
      $annee = $dateArray[0];
      $mois = $dateArray[1];
      $jour = $dateArray[2];
      $anneeActuelle =date('Y');
      $moisActuelle = date('m');
      $jourActuelle = date('d');
      // Validate data
      if (empty($data['prix'])) {
        $data['prix_err'] = 'entrer un prix';
      }
      if (empty($data['image'])) {
        $data['image_err'] = 'entrer une image';
      }
      if (empty($data['nombre_nuit'])) {
        $data['nombre_nuit_err'] = 'entrer le nombre de nuits';
      }
      if ($annee == $anneeActuelle && $mois == $moisActuelle  && $jour-$jourActuelle>=2 ){
      }else{
        $data['date_depart_err'] = 'la date invalide pour un croisier';
      }
      if (empty($data['itenaire1'])) {
        $data['itenaire1_err'] = 'entrer la ville';
      }
      if (empty($data['itenaire2'])) {
        $data['itenaire2_err'] = 'entrer la ville';
      }
      if (empty($data['itenaire3'])) {
        $data['itenaire1_err'] = 'entrer la ville';
      }
 

      // Make sure no errors
      if (empty($data['prix_err']) && empty($data['image_err']) && empty($data['nombre_nuit_err']) && empty($data['date_depart_err']) && empty($data['inetaire1_err']) && empty($data['itenaire2_err']) && empty($data['itenaire3_err'])) {
        // Validated
        if ($this->croisierModel->addCruise($data)) {
          flash('post_message', 'croisiere ajouter avec succes');
          redirect('croisiers/');
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
        'itenaire1' => '',
        'itenaire2' => '',
        'itenaire3' => '',
        'navire' => $navires,
        'port' => $ports
      ];

      flash('register_success', 'croisier ajoute avec success');
      $this->view('croisiers/addcroisier', $data);

    }
  }



  public function delete($id)
  {


    if ($this->croisierModel->deleteCroisier($id)) {
      flash('register_success', 'croisier est supprime');
      redirect('pages/admincroisier');
    } else {
      redirect('pages/admincroisier');
    }
  }
}