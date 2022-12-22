<?php
 require_once('./autoload.php');
$home = new HomeController();
$pages = ['home','gallery','contact','reserve'];
$adminPages = ['admin', 'add', 'update', 'delete'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
        $data = new BijouxController();
        $bijoux = $data->GetAllBijoux(); 
    }elseif($_GET['page']==="login"){
        require_once 'autoload.php';
        $home->login();
    }elseif($_GET['page']==="register"){
        require_once 'views/includes/header.php';
        require_once 'autoload.php';
        $home->register();
    }
    elseif(in_array($_GET['page'],$adminPages) && $_SESSION['login']==true){
        $home->index2($_GET['page']);
    }elseif($_SESSION['login']==false){
        Redirect::to('home');
    }
    else{
    include('views/includes/404.php');
    }
}else{
    header("location: login");
}
?>