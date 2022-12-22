<?php

class UsersController
{
    public function register()
    {
        if (isset($_POST['submit'])) {
            $options = ['cost' => 12];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'password' => $password
                
            );

            $result = User::createUser($data);
            if ($result === 'ok') {
                session::set('success', 'le compte est creer avec succes');
                Redirect::to('login');
            } else {
                echo $result;
            }
        }
    }

    ///////////////////////////////////////////

    public function authentifier()
    {
        if (isset($_POST['submit'])) {
            $data['nom_client'] = $_POST['nom_client'];
            $data['password'] = $_POST['password'];
            $result = User::login($data);
            if (isset($result)) {
                $_SESSION['login'] = true;
                if ($result->nom_client === $_POST['nom_client'] && $result->password === $_POST['password'] && $result->is_admin == 1) {
                    $_SESSION['nom_admin'] = $result->nom_client;
                    header('location:admin');
                } elseif ($result->nom_client === $_POST['nom_client'] && $result->password === $_POST['password'] && $result->is_admin == 0) {
                    $_SESSION['nom_client'] = $result->nom_client;
                    header("location: home");
                    $_SESSION['login'] = false;

                }elseif ($result== null) {
                    $_SESSION['login'] = false;
                session::set('error', 'nom ou mot de pass incorrect');
                header("location: login");
                }
            } else {
                
                header("location: home");
            }

        }
    }
    
}



