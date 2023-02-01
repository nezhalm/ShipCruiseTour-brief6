<?php
class Users extends Controller
{
    public $userModel;
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
            $_POST = filter_input_array(INPUT_POST, 513);

            $activationcode = $_POST['activationcode'];

            // Make sure errors are empty
            if (empty($activationcode)) {
                echo json_encode(["error" => "enter le code"]);
            } else {
                $loggedInUser = $this->userModel->login($activationcode);

                if ($loggedInUser) {
                    echo json_encode($loggedInUser);
                } else {
                    echo json_encode(["invalid" => "invalid"]);
                }
            }
        }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////


    public function register()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            $bytes = random_bytes(4);


            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, 513);
            $data = [
                'activationcode' => bin2hex($bytes),
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'email' => $_POST['email']
            ];
            // Register User
            if ($this->userModel->register($data)) {
                if ($this->userModel->login($data['activationcode'])) {
                    echo json_encode([
                        'Success' => "register avec success",
                        'reject' => 'votre code : `' . $this->userModel->login($data['activationcode'])->activationcode . '`'
                    ]);

                }
            } else {
                echo json_encode(['error' => "eroooooooooor"]);
            }
        }
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->first_name;
        $_SESSION['is_admin'] = $user->is_admin;

        // exit;
        if ($_SESSION['is_admin'] == 1) {
            redirect('pages/adminport');
        } else {
            redirect('pages/index');
        }

    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
}