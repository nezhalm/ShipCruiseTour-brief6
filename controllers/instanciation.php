<?php
class Instances
{
    public static function addInstance()
    {
        if (isset($_POST['submit'])) {
            $newBijoux = new BijouxController();
            $newBijoux->addBijoux();
       
        }
    }
    public static function updateInstance()
    {
        if (isset($_POST['id'])) {
            $exitbijoux = new BijouxController();
            $bijoux = $exitbijoux->getOneBijoux();
        }

        if (isset($_POST['submit'])) {
            $exit = new BijouxController();
            $exit->updateBijoux();
        }
        return isset($_POST['id']) ? $bijoux : false;
        // if (isset($_POST['id']))
        //     return $bijoux;
        // else
        //     return false;
    }

    public static function homeInstance()
    {
        if (isset($_POST['find'])) {
            $data = new BijouxController();
            $bijoux = $data->findBijoux();
        } else {
            $data = new BijouxController();
            $bijoux = $data->GetAllBijoux();
        }
        return $bijoux;
    }

}
