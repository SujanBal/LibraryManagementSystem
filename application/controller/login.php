<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
      
        require APP . 'view/login/index.php';
       
    }

   
    public function checklogin()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_checklogin"])) {
            // do addSong() in model/model.php
            if($_POST["username"]=="student" && $_POST["password"]=="12345"){
                header('location: ' . URL . 'two');

            }
           else {
        
               header('location: ' . URL . 'login?mode=wrong');
            }
        }
        
    }

     public function logout()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["yes_logout"])) {
            
               header('location: ' . URL . 'login');

            }
        
    }


}

   