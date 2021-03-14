<?php

class Registration extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()

    { 
           
        $name=$this->model->getRegistration();
        
       // load views.ithin the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/registration/index.php';
        require APP . 'view/_templates/footer.php';
    
        
    }

    public function addRegistration()
    {
         if(isset($_POST["submit_add"])){
            $imageName=mysql_real_escape_string($_FILES["image"]["name"]);
            $imageData=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
            $imageType=mysql_real_escape_string($_FILES["image"]["type"]);
            if(substr($imageType, 0,5) == "image")
                {
                    $this->model->addRegistration($imageData,$imageName,$_POST["student_id"],$_POST["student_name"], $_POST["address"], $_POST["guardian_name"], $_POST["phone"],$_POST["birth_date"], $_POST["course"],$_POST["enrolled_date"]);
                    echo "Image Uploaded";
                    header('location: ' . URL . 'registration');
                }
                else{
                    $this->model->addRegistration($imageData,$imageName,$_POST["student_id"],$_POST["student_name"], $_POST["address"], $_POST["guardian_name"], $_POST["phone"],$_POST["birth_date"], $_POST["course"],$_POST["enrolled_date"]);
                    echo "Image Uploaded";
                    header('location: ' . URL . 'registration');
                }
        }
          header('location: ' . URL . 'registration?mode=success5');     
    }
        
             
    
     
    
    

     public function updateRegistration()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update"])) {
  
                    $this->model->updateRegistration($_POST["id"],$_POST["student_id"],$_POST["student_name"], $_POST["address"],$_POST["guardian_name"], $_POST["phone"],$_POST["birth_date"],$_POST["course"], $_POST["enrolled_date"]);
                  

                }
               

        
       
        // where to go after song has been added
          header('location:' . URL . 'registration?mode=success5');
    }

    public function delRegistration()
    {
        if(isset($_GET["submit_update"])){
            $b=($_GET["num"]);
             if(is_null($b))
                {
                    echo "select first";
                }
                else{
                     $lists=$this->model->selectRegister($b);
                // gettinpg all songs and amount of songs
              
                //$amount_of_songs = $this->model->getAmountOfSongs();

               // load views. within the views we can echo out $songs and $amount_of_songs easily
                require APP . 'view/_templates/header.php';
                require APP . 'view/registration/updateRegistration.php';
                require APP . 'view/_templates/footer.php';
                }
        }
      
         
        // if we have an id of a song that should be deleted
       if(isset($_GET["yes_delete"])){
           // $a=implode(",", $_POST["num"]);
            $a= $_GET["num"];
          
            $this->model->delRegistration($a);
               header('location: ' . URL . 'registration?mode=successd3');
        }
        

        // where to go after song has been deleted
     
    }

}
