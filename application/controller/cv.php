<?php


class Cv extends Controller
{
   
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/cv/index.php';
        require APP . 'view/_templates/footer.php';
       
    }

   public function myDetails($sn)
    {
        $lists=$this->model->selectRegistration($sn);
        $name=$this->model->getmylibrary($sn);
        $total=$this->model->getTotal($sn);

        
        require APP . 'view/cv/index.php';
       

     
        
    }

     public function logout()
    {
       
        if (isset($_POST["yes_logout"])) {
            
               header('location: ' . URL . 'signup');

            }
        
    }
}

   