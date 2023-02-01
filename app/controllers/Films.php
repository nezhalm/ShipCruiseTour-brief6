<?php
class Films extends Controller
{
    private $filmModel;
    private $userModel;

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->filmModel = $this->model('Film');

        $this->userModel = $this->model('User');
    }

    public function addreservation()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'salle' => $_POST['salle'],
                'reservation_date' => $_POST['reservation_date'],
                'n_place' => $_POST['n_place'],

            ];
            if ($this->filmModel->reserveFilm($data)) {
                echo "Hello";
            } else {
                echo "hhhh";
            }
        } else {
            echo json_encode(['error' => "eroooooooooor"]);
        }
    }

    // public function delete($id)
    // {

    //   if ($this->croisierModel->deleteCroisier($id)) {
    //     flash('register_success', 'croisier est supprime');
    //     redirect('pages/admincroisier');
    //   } else {
    //     redirect('pages/admincroisier');
    //   }
    // }
}
