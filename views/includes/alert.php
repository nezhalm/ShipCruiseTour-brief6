<?php 
if(isset($_COOKIE['success'])){
    echo '<div class="alert alert-success col-md-10 mx-auto">'.$_COOKIE['success'].'</div>';
}
if(isset($_COOKIE['error'])){
    echo '<div class="alert alert-danger col-md-10 mx-auto">'.$_COOKIE['error'].'</div>';
}
if(isset($_COOKIE['info'])){
    echo '<div class="alert alert-info col-md-10 mx-auto">'.$_COOKIE['info'].'</div>';
}
?>