<?php


class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
       
        require APP . 'view/home/index.php';
      
       
    }


}

   