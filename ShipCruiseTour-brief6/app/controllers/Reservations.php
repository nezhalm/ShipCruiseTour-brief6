<?php
class Reservations extends Controller
{
  public $croisierModel;
  public $portModel;
  public $userModel;
  public $reservationModel;
  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    }
    $this->croisierModel = $this->model('Croisier');
    $this->portModel = $this->model('Port');
    $this->userModel = $this->model('User');
    $this->reservationModel = $this->model('Reservation');
  }
  /////////////////////////////////////////////////////////////////////////////////////////////////

  public function index()
  {
    // Get posts
    $chambre = $this->reservationModel->getChambre();

    $data = [
      'res' => $chambre
    ];

    $this->view('pages/myreservations', $data);
  }
  public function Chambre()
  {
    // Get posts
    $chambre = $this->portModel->getChambre();

    $data = [
      'chambre' => $chambre
    ];
    $this->view('pages/reserve', $data);
  }

  /////////////////////////////////////////////////////////////////////////////////////////////////


  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'date_depart' => trim($_POST['name']),
        'pays' => $_POST['pays'],

        'nom_err' => '',
        'pays_err' => ''
      ];

      // Validate data
      if (empty($data['nom'])) {
        $data['nom_err'] = 'entrer le nom du navire';
      }
      if (empty($data['pays'])) {
        $data['pays_err'] = 'entrer le nombre des places';
      }
      // Make sure no errors
      if (empty($data['nom_err']) && empty($data['pays_err'])) {
        // Validated
        if ($this->portModel->addPort($data)) {
          flash('post_message', 'port ajouter avec success');
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


  /////////////////////////////////////////////////////////////////////////////////////////////////

  public function reserve_affiche()
  {

    $reservations = $this->reservationModel->getReservation(date('Y'), date('m'), date('d'));


    $data = [
      'res' => $reservations,
    ];
    $this->view('pages/myreservations', $data);


  }

  /////////////////////////////////////////////////////////////////////////////////////////////////:

  public function deleteres($idre)
  {

    $idcr = $this->reservationModel->getIdCroisiere($idre);
    $isCancel = $this->croisierModel->isCancellable($idcr);
    if ($isCancel) {
      $this->reservationModel->deleteReservation($idre);
      $res = $this->reservationModel->getReservations();
     $croisierbyid = $this->croisierModel->getCroisierbyid($idcr);
      $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) + 1;
      $cpt2 = $croisierbyid[0]->chambre;
      $cpt = $croisierbyid[0]->nezha;

         if(isset($_POST["room"])) {
        $room = $_POST["room"];
       if($room = 'solo') {
            $croisierbyid[0]->nezha = ($croisierbyid[0]->nezha)+1 ;
            $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) + 1;
      }
        if($room = '2_people'){
           $croisierbyid[0]->nezha = ($croisierbyid[0]->nezha)+2 ;
            $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) + 1;}
           
      
    if($room = 'family') {
       $croisierbyid[0]->nezha = ($croisierbyid[0]->nezha)+6 ;
             $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) + 1;
     }
     //else{
    //    $croisierbyid[0]->nezha;
    //    $croisierbyid[0]->chambre;
    //   }

      
    
        }
        $cpt = $croisierbyid[0]->nezha;
        $cpt2 = $croisierbyid[0]->chambre;
     
      
      $this->reservationModel->updatecapacity($croisierbyid[0]->navire_nom,$cpt,$cpt2);
      $data = [
        'res' => $res,
      ];
      flash('register_success', 'the reservation is cancel!');
      $this->view('pages/myreservations', $data);
    } else {
      flash1('register_danger', 'you cant cancel this reservation!');
      $res = $this->reservationModel->getReservations();
      $data = [
        'res' => $res,
      ];
      $this->view('pages/myreservations', $data);
    }

  }
}