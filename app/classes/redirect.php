<?php 
class Redirect{
    static public function to($page){
         header('location:'.$page);
    }
    static public function url($a)
    {
        return 'http://localhost/brief5/'.$a;
    }
}

?>