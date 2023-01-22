<?php
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');

    }


    public function login()
    {
        // Check for POST

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];

           
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);


                if ($loggedInUser) {
                    // Create Session
                    $this->createUserSession($loggedInUser);
                } else {
            
                    flash2('register_danger', 'info incorrect');
                    $this->view('users/login', $data);
                }

        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }



    // public function login()
    // {
    //     // Check for POST
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //         $data = [
    //             'email' => trim($_POST['email']),
    //             'password' => trim($_POST['password']),

    //         ];
    //         if ($this->userModel->findUserByEmail($data['email'])) {
    //             echo 1;
    //         }

    //     } else {
    //         $data = [
    //             'email' => '',
    //             'password' => '',

    //         ];

    //         $this->view('users/login', $data);
    //     }
    // }





    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->first_name;
        $_SESSION['is_admin'] = $user->is_admin;

        // exit;

        redirect('pages/index');
    }





    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
    public function reserve()
    {

    }
}