<?php

class Pages extends Controller
{
  private $croisierModel;
  private $userModel;
  private $navireModel;
  private $portModel;
  private $reservationModel;

  public function __construct()
  {
    $this->croisierModel = $this->model('Croisier');
    $this->userModel = $this->model('User');
    $this->navireModel = $this->model('Navire');
    $this->portModel = $this->model('Port');
    $this->reservationModel = $this->model('reservation');
  }

  public function index()
  {
    if (isLoggedIn()) {
      $this->view('pages/index');
      // redirect('pages/index');
    } else {
      $this->view('pages/index');
    }
  }

  public function index1()
  {
    if (isLoggedIn()) {

      $this->view('pages/index');
    }
  }
  public function about()
  {

    $this->view('pages/about');
  }
  public function contact()
  {


    $this->view('pages/contact');
  }
  public function reserve()
  {
    $this->view('pages/reserve');
  }
  public function ship()
  {
    $croisier = $this->croisierModel->getCroisier();
     $navire = $this->navireModel->getNavire();
     $port = $this->portModel->getPort();
     $page = $this->croisierModel->getpagination();
    $data = [
      'croisier' => $croisier,
       'navire' => $navire,
       'port' => $port,
        'page' =>$page
    ];
    $this->book();
    $this->view('pages/ship', $data);
  }


  /////////////////////////////////////////////////////////

  public function book()
  {
   
    if (isset($_POST['submit'])) {
      
      $costumer = $_SESSION['user_id'];
      $cruise = isset($_POST["croisier"]) ? $_POST["croisier"] : null;
     
      $croisierbyid = $this->croisierModel->getCroisierbyid($cruise);
       
      
      $prix = isset($_POST["prix"]) ? $_POST["prix"] : null;
      
      if(isset($_POST["room"])) {
        $room = $_POST["room"];
        switch ($room) {

          case 1:
            $prix += 0;
            $croisierbyid[0]->nezha = ($croisierbyid[0]->nezha)-1 ;
            $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) - 1;
            break;

          case 2:
            $prix += 100;
            $croisierbyid[0]->nezha = ($croisierbyid[0]->nezha)-2 ;
            $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) - 1;

            break;

          case 3:

            $prix += 200;
             $croisierbyid[0]->nezha = ($croisierbyid[0]->nezha)-6 ;
             $croisierbyid[0]->chambre = ($croisierbyid[0]->chambre) - 1;

            break;

          // case 4:
          //   $prix += 300;
          //   break;

          default:
            $prix += 0;
            $croisierbyid[0]->nezha;
            $croisierbyid[0]->chambre;
           
            break;
        }
        $cpt = $croisierbyid[0]->nezha;
        $cpt2 = $croisierbyid[0]->chambre;
     
      } else {
        $room = null;
      }
      $dateOfReservation = date("Y-m-d");
      $data = [
        'cruise' => $cruise,
        'prix' => $prix +=1000,
        'date' => $dateOfReservation,
        'user' => $costumer,
        'room' => $room
      ];
      $this->reservationModel->addReservation($data);
      $this->reservationModel->updatecapacity($croisierbyid[0]->navire_nom,$cpt,$cpt2);
      // $navire = $this->navireModel->getNavirebyid($croisierbyid[0]->idi);
     
    }
  }


  //filter de navire ///////////////////////////////////////////////////////////////////////////////
  public function ship_filter_navire($id)
  {
    // $croisier = $this->croisierModel->getCroisier();
    $navire = $this->navireModel->getNavire();
    $port = $this->portModel->getPort();
    $croisier_navire = $this->croisierModel->getCroisier_filter_navire($id);

    if ($navire) {
      $data = [
        //  'croisier' => $croisier,
        'navire' => $navire,
        'port' => $port,
        'croisier' => $croisier_navire,
      ];
      $this->view('pages/ship', $data);
    } else {

      $data = [
        //  'croisier' => $croisier,
        'message' => flash('register_success', 'You are registered and can log in'),
        'port' => $port,
        'croisier' => $croisier_navire,
      ];
      $this->view('pages/ship', $data);
    }

  }


  public function ship_filter_port($id)
  {
     //$croisier = $this->croisierModel->getCroisier();
    $navire = $this->navireModel->getNavire();
    $port = $this->portModel->getPort();
    $croisier_port = $this->croisierModel->getCroisier_filter_port($id);


    $data = [
      // 'croisier' => $croisier,
      'navire' => $navire,
      'port' => $port,
      'croisier' => $croisier_port,
    ];

    $this->view('pages/ship', $data);
  }


  public function ship_filter_month($i)
  {

   
    $navire = $this->navireModel->getNavire();
    $port = $this->portModel->getPort();
    $croisier_month = $this->croisierModel->getCroisier_filter_month($i);
    $data = [
      //  'croisier' => $croisier,
      'navire' => $navire,
      'port' => $port,
      'croisier' => $croisier_month,
     

    ];
    $this->view('pages/ship', $data);
  }

 

  public function ship_filter_chambre()
  {
    // $croisier = $this->croisierModel->getCroisier();

    $chambre = $this->portModel->getChambre();

    $data = [
      //  'croisier' => $croisier,
      'chambre' => $chambre


    ];

    $this->view('pages/reserve', $data);
  }

  public function register()
  {
    $this->view('pages/register');
  }
  public function adminnavire()
  {

    // Get posts
    $navire = $this->navireModel->getNavire();

    $data = [
      'navire' => $navire
    ];

    $this->view('pages/adminnavire', $data);
  }
  public function adminport()
  {
    // Get posts
    $port = $this->portModel->getPort();

    $data = [
      'port' => $port
    ];


    $this->view('pages/adminport', $data);
  }

  public function admincroisier()
  {
    $croisier = $this->croisierModel->getCroisier();
    $navire = $this->navireModel->getNavire();
    $port = $this->portModel->getPort();

    $data = [
      'croisier' => $croisier,
      'navire' => $navire,
      'port' => $port,

    ];

    $this->view('pages/admincroisier', $data);
  }
  public function addnavire()
  {
    $this->view('croisier/adminnavire');
  }
  public function addport()
  {
    $this->view('croisier/adminport');
  }

  public function addcroisier()
  {
    $this->view('croisier/admincroisier');
  }
  public function my_reservations()
  {
    if (isset($_SESSION['user_id'])) {

      $res = $this->reservationModel->getReservations();
     
      $data = [
      'res' => $res,
    ];
      $this->view('pages/myreservations', $data);

      // $this->view('pages/myreservations', $data);
    } else {
      redirect('users/login');
    }
  }
  
}