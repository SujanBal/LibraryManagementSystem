<?php


class Attendance extends Controller
{
    
    public function index()
    {   

        require APP . 'view/_templates/header.php';
        require APP . 'view/attendance/index.php';
        require APP . 'view/_templates/footer.php';
    }

  
}
