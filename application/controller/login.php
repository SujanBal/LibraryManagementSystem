<?php


class Login extends Controller
{
   
    public function index()
    {
      
        require APP . 'view/login/index.php';
       
    }

   
    public function checklogin()
    {

        if (isset($_POST["submit_checklogin"])) {
      
            if($_POST["username"]=="staff" && $_POST["password"]=="12345"){
                header('location: ' . URL . 'two');

            }
           else {
        
               header('location: ' . URL . 'login?mode=wrong');
            }
        }
        
    }

     public function logout()
    {

        if (isset($_POST["yes_logout"])) {
            
               header('location: ' . URL . 'login');

            }
        
    }


}

   