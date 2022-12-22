<?php 
class HomeController{
    public function index($page){
        
        include('views/'.$page.'.php');
    }
    public function index2($page){
        include('views/admin/'.$page.'.php');
    }
    function login(){
        include('views/includes/alert.php');
        require('views/login.php');
        $loginuser = new UsersController();
        $loginuser->authentifier();
    }
    function register(){
        if(isset($_POST['submit'])){
            $creatBijoux = new UsersController();
            $creatBijoux->register();
        }
        include('views/includes/alert.php');
        include('views/register.php');

    }
}
?>