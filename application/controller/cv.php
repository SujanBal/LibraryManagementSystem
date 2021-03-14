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
class Cv extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/cv/index.php';
        require APP . 'view/_templates/footer.php';
       
    }

    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
   public function myDetails($sn)
    {
        $lists=$this->model->selectRegistration($sn);
        $name=$this->model->getmylibrary($sn);
        $total=$this->model->getTotal($sn);

        // gettinpg all songs and amount of songs
      
        //$amount_of_songs = $this->model->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        
        require APP . 'view/cv/index.php';
       

        // where to go after song has been added
        
    }

     public function logout()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["yes_logout"])) {
            
               header('location: ' . URL . 'signup');

            }
        
    }
}

   